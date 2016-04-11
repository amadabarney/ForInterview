<?php
// src/AppBundle/Controller/AdminController.php
namespace AppBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    private function preCheck($callback)
    {
        if(isset($_SESSION["userId"]) && is_int($_SESSION["userId"]))
        {
            return $callback();
        }
        else
        {
            return $this->redirect('login');
        }
    }

    private function _getRealContent($key)
    {
        $str = isset($_POST[$key]) ? $_POST[$key]:"";

        return htmlentities($str);
    }

    private function _emailCheck($email)
    {
        $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        if (preg_match( $pattern, $email ))
        {
            return true;
        }
        return false;
    }

    /**
     * @Route("/",name="index")
     */
    public function IndexAction()
    {
        return $this->preCheck(function(){
            $user = $this->getDoctrine()
                 ->getRepository('AppBundle\Entity\User')
                 ->findAll();
            return $this->render(
                'admin/index.html.twig',
                array(
                    'data' => $user,
                )
            );
        });
    }

    /**
     * @Route("/modify",name="modify")
     */
    public function ModifyAction()
    {
        return $this->preCheck(function(){
            $username = $this->_getRealContent("_username");
            $email = $this->_getRealContent("_email");
            $telphone = $this->_getRealContent("_telphone");
            $gender = $this->_getRealContent("_gender");
            $qq = $this->_getRealContent("_qq");
            $id = $this->_getRealContent("_id");
            if(!is_numeric($qq) || ($gender > 1 || $gender < 0) || !$this->_emailCheck($email) || !is_numeric($telphone))
            {
                throw $this->createNotFoundException('Paramter Err');
            }

            $em = $this->getDoctrine()->getEntityManager();
            $user = $em->getRepository('AppBundle\Entity\User')->find(htmlentities($id));

            if (!$user) {
                throw $this->createNotFoundException('No user found for id');
            }

            $user->setUsername($username);
            $user->setEmail($email);
            $user->setTelphone($telphone);
            $user->setGender($gender);
            $user->setQq($qq);
            $em->flush();

            unset($_SESSION["error"]);
            return $this->redirect('/');
        });
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $lastUsername = isset($_SESSION["lastUsername"]) ? $_SESSION["lastUsername"]:"";
        $errorMsg = isset($_SESSION["error"]) ? $_SESSION["error"]:"";
        return $this->render(
            'admin/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $errorMsg,
            )
        );
    }
 
    /**
     * @Route("/logout",name="logout")
     */
    public function logoutAction()
    {
        unset($_SESSION["userId"]);
        unset($_SESSION["error"]);
        return $this->redirect('login');
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
        $username = $this->_getRealContent("_username");
        $password = $this->_getRealContent("_password");

        $_SESSION["lastUsername"] = $username;
        if(empty($username) || empty($password))
        {
            $_SESSION['error'] = "username or password empty";
            return $this->redirect("login");
        }
        $user = $this->getDoctrine()
                 ->getRepository('AppBundle\Entity\User')->findOneBy(array('username' => $username,'password'=> md5($password)));

        if($user)
        {
            $_SESSION['userId'] = $user->getId();
            return $this->redirect('/');
        }

        $_SESSION['error'] = "not found user account";
        return $this->redirect("login");
    }

    /**
     * @Route("/register",name="register")
     */
    public function RegisterAction()
    {
        $errorMsg = isset($_SESSION["error"]) ? $_SESSION["error"]:"";
        return $this->render(
            'admin/register.html.twig',
            array(
                'error' => $errorMsg,
            )
        );
    }

    /**
     * @Route("/register_check",name="register_check")
     */
    public function RegisterCheckAction()
    {
        $username = $this->_getRealContent("_username");
        $password = $this->_getRealContent("_password");
        $email = $this->_getRealContent("_email");
        $telphone = $this->_getRealContent("_telphone");
        $gender = $this->_getRealContent("_gender");
        $qq = $this->_getRealContent("_qq");

        if(!is_numeric($qq) || ($gender > 1 || $gender < 0) || !$this->_emailCheck($email) || !is_numeric($telphone) || empty($username) || empty($password))
        {
            $_SESSION["error"] = "Param Err";
            return $this->redirect("register");
        }

        $em = $this->getDoctrine()->getEntityManager();
        $em->getConnection()->beginTransaction();
        $user = new \AppBundle\Entity\User();
        $user->setUsername($username);
        $user->setPassword(md5($password));
        $user->setEmail($email);
        $user->setTelphone($telphone);
        $user->setGender($gender);
        $user->setQq($qq);
        
        try {
            $em->persist($user);
            // Do a commit before the FLUSH
            $em->getConnection()->commit();
            $em->flush();
            $em->clear();    

        } catch(Exception $e) {

            $em->getConnection()->rollback();
            $em->close();
            $_SESSION["error"] = $e;
            return $this->redirect("register");
        }

        unset($_SESSION["error"]);
        return $this->redirect("login");
    }
}
?>
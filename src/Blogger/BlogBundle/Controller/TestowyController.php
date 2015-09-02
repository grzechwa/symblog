<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestowyController extends Controller
{
    public function testAction()
    {
        return $this->render('BloggerBlogBundle:Testowy:test.html.twig');
    }
}

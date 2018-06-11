<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function main () {    
        return $this->render('content/main.html.twig',
            [
                'layout' => 'layout/main.html.twig',
                'menuItems' => $this->getMenuItems(),
            ]
        );
    }

    public function products () {
        $arr = [
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'test test test test test'
            ],
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'test test test test test'
            ],
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'test test test test test'
            ],
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'test test test test test'
            ],
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'test test test test test'
            ],
        ];
        return $this->render('content/products.html.twig',
            [
                'layout' => 'layout/main.html.twig',
                'products' => $arr,
                'menuItems' => $this->getMenuItems('/products'),
            ]
        );
    }

    public function contacts () {
        return $this->render('content/contacts.html.twig',
            [
                'layout' => 'layout/main.html.twig',
                'menuItems' => $this->getMenuItems('/contacts'),
            ]
        );
    }

    public function getMenuItems ($selected = '/') {
        $items = [
            '/' => [
                'href' => '/' ,
                'text' => 'Glavna'
            ],
            '/products' => [
                'href' => '/products', 
                'text' => 'Brasno'
            ],
            '/contacts' => [
                'href' => '/contacts',
                'text' => 'Kontakti'
            ],
        ];
        $str = '';
        foreach ($items as $item) {
            if ($item['href'] == $selected) {
                $str .= '<a class="selected" href="'.$item['href'].'">'.$item['text'].'</a>';
            } else {
                $str .= '<a href="'.$item['href'].'">'.$item['text'].'</a>';
            }
        }
        return $str;
    }
}
?>
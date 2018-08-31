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
                'text'=> 'Brašno od spelte <br/> cena: 80 din/kg'
            ],
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'Brašno od heljde <br/> cena: 140 din/kg'
            ],
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'Brašno od raži <br/> cena: 70 din/kg'
            ],
            [
                'img' => 'https://stock.adobe.com/Download/Watermarked/27279605',
                'text'=> 'Brašno od belog kukuruza <br/> cena: 60 din/kg'
            ]
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
                'text' => 'Brašno'
            ],
            '/contacts' => [
                'href' => '/contacts',
                'text' => 'Informacija'
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
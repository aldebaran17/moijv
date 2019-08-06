<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */

    /*public function productDetails(ProductRepository $productRepository, $id)
    {
        // SELECT * FROM product WHERE id=1
        $product = $productRepository->find($id);
        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);
    }*/

    /**
     * @Route("/product/{id}", name="product")
     */
    public function productDetails(Product $product)
    {
        return $this->render('product/product.html.twig', [
            'product' => $product,
        ]);
    }
}

<?php
// src/Controller/CarApiController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CarApiController extends AbstractController
{
    // Получение списка автомобилей
    #[Route('/api/v1/cars', name: 'get_all_cars', methods: ['GET'])]
    public function getAllCars(): JsonResponse
    {
        // Пример данных. Здесь можно интегрировать реальную базу данных
        $cars = [
            [
                'id' => 1,
                'brand' => [
                    'id' => 1,
                    'name' => 'Toyota',
                ],
                'photo' => 'https://yandex.ru/photos/car1.jpg',
                'price' => 20000,
            ],
            [
                'id' => 2,
                'brand' => [
                    'id' => 2,
                    'name' => 'Honda',
                ],
                'photo' => 'https://yandex.ru/photos/car2.jpg',
                'price' => 25000,
            ],
        ];

        return new JsonResponse($cars);
    }
}

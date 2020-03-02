<?php
header('Content-Type: application/json');

$data = '[{
            "createdAt": "2020-02-28T19:12:38.268Z",
            "id": "5f8fbda9-bbbe-4290-b641-c7b497fa56cf",
            "userId": 1,
            "title": "Temperatura",
            "body": "30"
        }, {
            "createdAt": "2020-02-28T19:12:33.945Z",
            "id": "537c41f7-91a4-4893-8cd1-106db8b5c11c",
            "userId": 1,
            "title": "Temperatura",
            "body": "29"
        }, {
            "createdAt": "2020-02-28T19:12:27.832Z",
            "id": "14fdc840-3f3e-4e91-8a04-02af24f44c89",
            "userId": 1,
            "title": "Temperatura",
            "body": "28"
        }, {
            "createdAt": "2020-02-28T19:12:21.184Z",
            "id": "3d528429-52df-4295-99cf-a9e635eb6db0",
            "userId": 1,
            "title": "Temperatura",
            "body": "29"
        }]';

    echo json_encode($data);


?>
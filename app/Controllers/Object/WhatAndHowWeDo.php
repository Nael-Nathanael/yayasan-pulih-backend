<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WhatAndHowWeDo extends BaseController
{
    public function update()
    {
        $lines = model("Lines");

        $lines->save(
            [
                "group_name" => "WHAT_AND_HOW_WE_DO",
                "key" => "WHAT_WE_DO_TITLE",
                "value" => $this->request->getPost("what_we_do_title")
            ]
        );

        $lines
            ->save(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "WHAT_WE_DO_DESCRIPTION",
                    "value" => $this->request->getPost("what_we_do_description")
                ]
            );

        $lines
            ->save(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "WHAT_WE_DO_DESCRIPTION_2",
                    "value" => $this->request->getPost("what_we_do_description_2")
                ]
            );

        $lines
            ->save(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "HOW_WE_DO_TITLE",
                    "value" => $this->request->getPost("how_we_do_title")
                ]
            );

        $lines
            ->save(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "HOW_WE_DO_DESCRIPTION",
                    "value" => $this->request->getPost("how_we_do_description")
                ]
            );

        $lines
            ->save(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "HOW_WE_DO_DESCRIPTION_2",
                    "value" => $this->request->getPost("how_we_do_description_2")
                ]
            );

        return redirect()->route("dashboard.landing.index");
    }

    public function get(): ResponseInterface
    {
        $lines = model("Lines");

        return $this->response->setJSON(
            [
                "what_we_do" => [
                    "title" => $lines->where("key", "WHAT_WE_DO_TITLE")->first()->value,
                    "descriptions" => [
                        $lines->where("key", "WHAT_WE_DO_DESCRIPTION")->first()->value,
                        $lines->where("key", "WHAT_WE_DO_DESCRIPTION_2")->first()->value
                    ]
                ],
                "how_we_do" => [
                    "title" => $lines->where("key", "HOW_WE_DO_TITLE")->first()->value,
                    "descriptions" => [
                        $lines->where("key", "HOW_WE_DO_DESCRIPTION")->first()->value,
                        $lines->where("key", "HOW_WE_DO_DESCRIPTION_2")->first()->value
                    ]
                ]
            ]
        );
    }
}

<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WhatAndHowWeDo extends BaseController
{
    public function update()
    {
        $lines = model("Lines");

        $lines
            ->where(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "WHAT_WE_DO_TITLE",
                ]
            )
            ->set(
                [
                    "value" => $this->request->getPost("what_we_do_title")
                ]
            )
            ->update();

        $lines
            ->where(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "WHAT_WE_DO_DESCRIPTION",
                ]
            )
            ->set(
                [
                    "value" => $this->request->getPost("what_we_do_description")
                ]
            )
            ->update();

        $lines
            ->where(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "WHAT_WE_DO_DESCRIPTION_2",
                ]
            )
            ->set(
                [
                    "value" => $this->request->getPost("what_we_do_description_2")
                ]
            )
            ->update();

        $lines
            ->where(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "HOW_WE_DO_TITLE",
                ]
            )
            ->set(
                [
                    "value" => $this->request->getPost("how_we_do_title")
                ]
            )
            ->update();

        $lines
            ->where(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "HOW_WE_DO_DESCRIPTION",
                ]
            )
            ->set(
                [
                    "value" => $this->request->getPost("how_we_do_description")
                ]
            )
            ->update();

        $lines
            ->where(
                [
                    "group_name" => "WHAT_AND_HOW_WE_DO",
                    "key" => "HOW_WE_DO_DESCRIPTION_2",
                ]
            )
            ->set(
                [
                    "value" => $this->request->getPost("how_we_do_description_2")
                ]
            )
            ->update();

        return redirect()->route("dashboard.landing.index");
    }

    public function get(): ResponseInterface
    {
        $lines = model("Lines");

        $data['how_we_do_title'] = $lines->where("key", "HOW_WE_DO_TITLE")->first()->value;
        $data['how_we_do_description'] = $lines->where("key", "HOW_WE_DO_DESCRIPTION")->first()->value;
        $data['how_we_do_description_2'] = $lines->where("key", "HOW_WE_DO_DESCRIPTION_2")->first()->value;

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

<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: 'lzceiwKEwtcXKq+Nvje/0pIYjpMDgvIy86JXCyxKxRorrBp5tQtMtOBE3zMsfn7dS8Pb+mbn+PdC01dx5JperIBvSjl58oNCWWLVEgDjhIZLRAPy77dNRkwt4ux4zjZNGfzsu0Cq87JBR5nZlSqoZmbZkCQsS1A9FX3FSRp/ceE=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '539edc4e8dad5331781be75742242d0e',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}

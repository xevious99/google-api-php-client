<?php
namespace Google\Service\Shopping;

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


class ShoppingModelProductJsonV1Images extends \Google\Collection
{
  public $link;
  public $status;
  protected $thumbnailsType = '\Google\Service\Shopping\ShoppingModelProductJsonV1ImagesThumbnails';
  protected $thumbnailsDataType = 'array';

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setThumbnails($thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }

  public function getThumbnails()
  {
    return $this->thumbnails;
  }
}
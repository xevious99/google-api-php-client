<?php
namespace Google\Service\Blogger;

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


class BlogList extends \Google\Collection
{
  protected $blogUserInfosType = '\Google\Service\Blogger\BlogUserInfo';
  protected $blogUserInfosDataType = 'array';
  protected $itemsType = '\Google\Service\Blogger\Blog';
  protected $itemsDataType = 'array';
  public $kind;

  public function setBlogUserInfos($blogUserInfos)
  {
    $this->blogUserInfos = $blogUserInfos;
  }

  public function getBlogUserInfos()
  {
    return $this->blogUserInfos;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
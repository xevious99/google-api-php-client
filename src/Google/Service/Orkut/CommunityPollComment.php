<?php
namespace Google\Service\Orkut;

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


class CommunityPollComment extends \Google\Model
{
  public $addedDate;
  protected $authorType = '\Google\Service\Orkut\OrkutAuthorResource';
  protected $authorDataType = '';
  public $body;
  public $id;
  public $kind;

  public function setAddedDate($addedDate)
  {
    $this->addedDate = $addedDate;
  }

  public function getAddedDate()
  {
    return $this->addedDate;
  }
  
  public function setAuthor(\Google\Service\Orkut\OrkutAuthorResource $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }
  
  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
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

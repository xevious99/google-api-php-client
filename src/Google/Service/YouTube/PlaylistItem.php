<?php
namespace Google\Service\YouTube;

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


class PlaylistItem extends \Google\Model
{
  protected $contentDetailsType = '\Google\Service\YouTube\PlaylistItemContentDetails';
  protected $contentDetailsDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $snippetType = '\Google\Service\YouTube\PlaylistItemSnippet';
  protected $snippetDataType = '';
  protected $statusType = '\Google\Service\YouTube\PlaylistItemStatus';
  protected $statusDataType = '';

  public function setContentDetails(\Google\Service\YouTube\PlaylistItemContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }

  public function getContentDetails()
  {
    return $this->contentDetails;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setSnippet(\Google\Service\YouTube\PlaylistItemSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setStatus(\Google\Service\YouTube\PlaylistItemStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}

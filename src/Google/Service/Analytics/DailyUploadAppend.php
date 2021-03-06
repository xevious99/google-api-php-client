<?php
namespace Google\Service\Analytics;

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


class DailyUploadAppend extends \Google\Model
{
  public $accountId;
  public $appendNumber;
  public $customDataSourceId;
  public $date;
  public $kind;
  public $nextAppendLink;
  public $webPropertyId;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }
  
  public function setAppendNumber($appendNumber)
  {
    $this->appendNumber = $appendNumber;
  }

  public function getAppendNumber()
  {
    return $this->appendNumber;
  }
  
  public function setCustomDataSourceId($customDataSourceId)
  {
    $this->customDataSourceId = $customDataSourceId;
  }

  public function getCustomDataSourceId()
  {
    return $this->customDataSourceId;
  }
  
  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setNextAppendLink($nextAppendLink)
  {
    $this->nextAppendLink = $nextAppendLink;
  }

  public function getNextAppendLink()
  {
    return $this->nextAppendLink;
  }
  
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }

  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
  
}

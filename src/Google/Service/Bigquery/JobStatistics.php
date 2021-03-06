<?php
namespace Google\Service\Bigquery;

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


class JobStatistics extends \Google\Model
{
  public $creationTime;
  public $endTime;
  protected $loadType = '\Google\Service\Bigquery\JobStatistics3';
  protected $loadDataType = '';
  protected $queryType = '\Google\Service\Bigquery\JobStatistics2';
  protected $queryDataType = '';
  public $startTime;
  public $totalBytesProcessed;

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setLoad(\Google\Service\Bigquery\JobStatistics3 $load)
  {
    $this->load = $load;
  }

  public function getLoad()
  {
    return $this->load;
  }

  public function setQuery(\Google\Service\Bigquery\JobStatistics2 $query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }

  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }
}

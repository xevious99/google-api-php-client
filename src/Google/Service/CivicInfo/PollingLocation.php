<?php
namespace Google\Service\CivicInfo;

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


class PollingLocation extends \Google\Collection
{
  protected $addressType = '\Google\Service\CivicInfo\SimpleAddressType';
  protected $addressDataType = '';
  public $endDate;
  public $id;
  public $name;
  public $notes;
  public $pollingHours;
  protected $sourcesType = '\Google\Service\CivicInfo\Source';
  protected $sourcesDataType = 'array';
  public $startDate;
  public $voterServices;

  public function setAddress(\Google\Service\CivicInfo\SimpleAddressType $address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  public function getNotes()
  {
    return $this->notes;
  }

  public function setPollingHours($pollingHours)
  {
    $this->pollingHours = $pollingHours;
  }

  public function getPollingHours()
  {
    return $this->pollingHours;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }

  public function getVoterServices()
  {
    return $this->voterServices;
  }
}

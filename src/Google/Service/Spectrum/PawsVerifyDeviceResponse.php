<?php
namespace Google\Service\Spectrum;

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


class PawsVerifyDeviceResponse extends \Google\Collection
{
  protected $databaseChangeType = '\Google\Service\Spectrum\DbUpdateSpec';
  protected $databaseChangeDataType = '';
  protected $deviceValiditiesType = '\Google\Service\Spectrum\DeviceValidity';
  protected $deviceValiditiesDataType = 'array';
  public $kind;
  public $type;
  public $version;

  public function setDatabaseChange(\Google\Service\Spectrum\DbUpdateSpec $databaseChange)
  {
    $this->databaseChange = $databaseChange;
  }

  public function getDatabaseChange()
  {
    return $this->databaseChange;
  }
  
  public function setDeviceValidities($deviceValidities)
  {
    $this->deviceValidities = $deviceValidities;
  }

  public function getDeviceValidities()
  {
    return $this->deviceValidities;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
  
  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
  
}
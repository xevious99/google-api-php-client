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


class DeviceOwner extends \Google\Model
{
  protected $operatorType = '\Google\Service\Spectrum\Vcard';
  protected $operatorDataType = '';
  protected $ownerType = '\Google\Service\Spectrum\Vcard';
  protected $ownerDataType = '';

  public function setOperator(\Google\Service\Spectrum\Vcard $operator)
  {
    $this->operator = $operator;
  }

  public function getOperator()
  {
    return $this->operator;
  }
  
  public function setOwner(\Google\Service\Spectrum\Vcard $owner)
  {
    $this->owner = $owner;
  }

  public function getOwner()
  {
    return $this->owner;
  }
  
}
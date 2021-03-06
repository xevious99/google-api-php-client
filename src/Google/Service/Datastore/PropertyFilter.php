<?php
namespace Google\Service\Datastore;

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


class PropertyFilter extends \Google\Model
{
  public $operator;
  protected $propertyType = '\Google\Service\Datastore\PropertyReference';
  protected $propertyDataType = '';
  protected $valueType = '\Google\Service\Datastore\Value';
  protected $valueDataType = '';

  public function setOperator($operator)
  {
    $this->operator = $operator;
  }

  public function getOperator()
  {
    return $this->operator;
  }
  
  public function setProperty(\Google\Service\Datastore\PropertyReference $property)
  {
    $this->property = $property;
  }

  public function getProperty()
  {
    return $this->property;
  }
  
  public function setValue(\Google\Service\Datastore\Value $value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
  
}

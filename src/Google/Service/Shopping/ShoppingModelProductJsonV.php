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


class Variants extends \Google\Model
{
  protected $variantType = '\Google\Service\Shopping\ShoppingModelProductJsonV1';
  protected $variantDataType = '';

  public function setVariant(\Google\Service\Shopping\ShoppingModelProductJsonV1 $variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }
}
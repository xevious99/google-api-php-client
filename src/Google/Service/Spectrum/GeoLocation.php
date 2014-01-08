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


class GeoLocation extends \Google\Model
{
  public $confidence;
  protected $pointType = '\Google\Service\Spectrum\GeoLocationEllipse';
  protected $pointDataType = '';
  protected $regionType = '\Google\Service\Spectrum\GeoLocationPolygon';
  protected $regionDataType = '';

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }

  public function getConfidence()
  {
    return $this->confidence;
  }
  
  public function setPoint(\Google\Service\Spectrum\GeoLocationEllipse $point)
  {
    $this->point = $point;
  }

  public function getPoint()
  {
    return $this->point;
  }
  
  public function setRegion(\Google\Service\Spectrum\GeoLocationPolygon $region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }
  
}
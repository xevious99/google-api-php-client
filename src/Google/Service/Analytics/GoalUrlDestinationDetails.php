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


class GoalUrlDestinationDetails extends \Google\Collection
{
  public $caseSensitive;
  public $firstStepRequired;
  public $matchType;
  protected $stepsType = '\Google\Service\Analytics\GoalUrlDestinationDetailsSteps';
  protected $stepsDataType = 'array';
  public $url;

  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }

  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  
  public function setFirstStepRequired($firstStepRequired)
  {
    $this->firstStepRequired = $firstStepRequired;
  }

  public function getFirstStepRequired()
  {
    return $this->firstStepRequired;
  }
  
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }

  public function getMatchType()
  {
    return $this->matchType;
  }
  
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }

  public function getSteps()
  {
    return $this->steps;
  }
  
  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
  
}
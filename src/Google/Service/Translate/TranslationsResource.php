<?php
namespace Google\Service\Translate;

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


class TranslationsResource extends \Google\Model
{
  public $detectedSourceLanguage;
  public $translatedText;

  public function setDetectedSourceLanguage($detectedSourceLanguage)
  {
    $this->detectedSourceLanguage = $detectedSourceLanguage;
  }

  public function getDetectedSourceLanguage()
  {
    return $this->detectedSourceLanguage;
  }

  public function setTranslatedText($translatedText)
  {
    $this->translatedText = $translatedText;
  }

  public function getTranslatedText()
  {
    return $this->translatedText;
  }
}

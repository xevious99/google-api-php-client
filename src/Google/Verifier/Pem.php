<?php
namespace Google\Verifier;

/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Verifies signatures using PEM encoded certificates.
 *
 * @author Brian Eaton <beaton@google.com>
 */
class Pem extends \Google\Verifier\Abstract
{
  private $publicKey;

  /**
   * Constructs a verifier from the supplied PEM-encoded certificate.
   *
   * $pem: a PEM encoded certificate (not a file).
   * @param $pem
   * @throws \Google\Auth\AuthException
   * @throws Google_
   * @throws GoogleException
   */
  public function __construct($pem)
  {
    if (!function_exists('openssl_x509_read')) {
      throw new \Google\read')) {
      throw new GoogleException('Google API PHP client needs the openssl PHP extension');
    }
    $this->publicKey = openssl_x509_read($pem);
    if (!$this->publicKey) {
      throw new \Google\Auth\AuthException("Unable to parse PEM: $pem");
    }
  }

  public function __destruct()
  {
    if ($this->publicKey) {
      openssl_x509_free($this->publicKey);
    }
  }

  /**
   * Verifies the signature on data.
   *
   * Returns true if the signature is valid, false otherwise.
   * @param $data
   * @param $signature
   * @throws \Google\Auth\AuthException
   * @return bool
   */
  public function verify($data, $signature)
  {
    $status = openssl_verify($data, $signature, $this->publicKey, "sha256");
    if ($status === -1) {
      throw new \Google\Auth\AuthException('Signature verification error: ' . openssl_error_string());
    }
    return $status === 1;
  }
}
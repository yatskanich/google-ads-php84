<?php

/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Lib;

/**
 * Provides testing data for the `ConfigurationLoaderTest`.
 *
 * @see \Google\Ads\GoogleAds\Lib\ConfigurationLoaderTest
 */
class ConfigurationLoaderTestProvider
{
    /**
     * Gets the absolute file path to the fake INI file used for
     * `ConfigurationLoader` tests.
     *
     * @return string
     */
    public static function getFilePathForTestIniFile()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'google_ads_php.ini';
    }

    /**
     * Gets the absolute file path to the fake home directory for
     * `ConfigurationLoader` tests.
     *
     * @return string
     */
    public static function getFilePathToFakeHome()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'fakehome';
    }

    /**
     * Gets the absolute file path of the fake INI file located in the fake home directory used for
     * `ConfigurationLoader` tests.
     *
     * @return string
     */
    public static function getFakeHomeFilePathForTestIniFile()
    {
        return self::getFilePathToFakeHome() . DIRECTORY_SEPARATOR . 'home_google_ads_php.ini';
    }
}

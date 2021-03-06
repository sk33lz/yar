<?php

namespace Drupal\Tests\rest\Functional\EntityResource\ConfigurableLanguage;

use Drupal\Tests\rest\Functional\BasicAuthResourceWithInterfaceTranslationTestTrait;

/**
 * @group rest
 */
class ConfigurableLanguageJsonBasicAuthTest extends ConfigurableLanguageResourceTestBase {

  use BasicAuthResourceWithInterfaceTranslationTestTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = ['basic_auth'];

  /**
   * {@inheritdoc}
   */
  protected static $format = 'json';

  /**
   * {@inheritdoc}
   */
  protected static $mimeType = 'application/json';

  /**
   * {@inheritdoc}
   */
  protected static $auth = 'basic_auth';

}

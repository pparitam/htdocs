<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'drupal/legacy-project',
  ),
  'versions' => 
  array (
    'asm89/stack-cors' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9c31def6a83f84b4d4a40d35996d375755f0e08',
    ),
    'behat/behat' => 
    array (
      'pretty_version' => 'v3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '08052f739619a9e9f62f457a67302f0715e6dd13',
    ),
    'behat/gherkin' => 
    array (
      'pretty_version' => 'v4.8.0',
      'version' => '4.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2391482cd003dfdc36b679b27e9f5326bd656acd',
    ),
    'behat/mink' => 
    array (
      'pretty_version' => 'v1.8.1',
      'version' => '1.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '07c6a9fe3fa98c2de074b25d9ed26c22904e3887',
    ),
    'behat/mink-browserkit-driver' => 
    array (
      'pretty_version' => 'v1.3.4',
      'version' => '1.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3b90840022ebcd544c7b394a3c9597ae242cbee',
    ),
    'behat/mink-extension' => 
    array (
      'pretty_version' => '2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '80f7849ba53867181b7e412df9210e12fba50177',
    ),
    'behat/mink-goutte-driver' => 
    array (
      'pretty_version' => 'v1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b9ad6d2d95bc70b840d15323365f52fcdaea6ca',
    ),
    'behat/mink-selenium2-driver' => 
    array (
      'pretty_version' => 'v1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '312a967dd527f28980cce40850339cd5316da092',
    ),
    'behat/transliterator' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
    ),
    'bex/behat-extension-driver-locator' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd97d2413eb015f57746786d13d10cd932c55dd58',
    ),
    'bex/behat-screenshot' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c2d3d901f8a096961e6e526cda561ad62bbb2f3d',
    ),
    'composer/installers' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ae03311f45dfe194412081526be2e003960df74b',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => 'v1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '54cacc9b81758b14e3ce750f205a393d52339e97',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => 'v1.6.2',
      'version' => '1.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eb152c5100571c7a45470ff2a35095ab3f3b900b',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => 'v1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a4fb7e902202c33cce8c55989b945612943c2ba',
    ),
    'doctrine/common' => 
    array (
      'pretty_version' => 'v2.7.3',
      'version' => '2.7.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4acb8f89626baafede6ee5475bc5844096eba8a9',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e11d84c6e018beedd929cff5220969a3c6d1d462',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1febd6c3ef84253d7c815bed85fc622ad207a9f8',
    ),
    'drupal/action' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/aggregator' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/automated_cron' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/ban' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/bartik' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/basic_auth' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/big_pipe' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/block' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/block_content' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/block_place' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/book' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/breakpoint' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/ckeditor' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/claro' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/classy' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/color' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/comment' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/config' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/config_translation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/contact' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/content_moderation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/content_translation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/contextual' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core' => 
    array (
      'pretty_version' => '8.9.14',
      'version' => '8.9.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '84796e158cd3bd50af08974dd62931d0cc78dc7e',
    ),
    'drupal/core-annotation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-assertion' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-bridge' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-class-finder' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-composer-scaffold' => 
    array (
      'pretty_version' => '8.9.14',
      'version' => '8.9.14.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c902d07cb49ef73777e2b33a39e54c2861a8c81d',
    ),
    'drupal/core-datetime' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-dependency-injection' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-diff' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-discovery' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-event-dispatcher' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-file-cache' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-file-security' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-filesystem' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-gettext' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-graph' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-http-foundation' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-php-storage' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-plugin' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-project-message' => 
    array (
      'pretty_version' => '8.9.14',
      'version' => '8.9.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '3f8fa28128f1fef68ee0e6647011a543ef92be5b',
    ),
    'drupal/core-proxy-builder' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-recommended' => 
    array (
      'pretty_version' => '8.9.14',
      'version' => '8.9.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e468b0df84cdcf6f30594feb4e080c5c6ea7ab3',
    ),
    'drupal/core-render' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-serialization' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-transliteration' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-utility' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-uuid' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/core-vendor-hardening' => 
    array (
      'pretty_version' => '8.9.14',
      'version' => '8.9.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '7c2922e60df83ce1a062626833d7f172ff0f268a',
    ),
    'drupal/core-version' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/datetime' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/datetime_range' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/dblog' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/drupal-driver' => 
    array (
      'pretty_version' => 'v2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ebc7fc3cbaa0b2eb7bcb100d1302dadb67a9de29',
    ),
    'drupal/drupal-extension' => 
    array (
      'pretty_version' => 'v4.1.0',
      'version' => '4.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f611a70aaa2d1ef6b3fdae9c35dc573508c7d648',
    ),
    'drupal/dynamic_page_cache' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/editor' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/entity_reference' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/field' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/field_layout' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/field_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/file' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/filter' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/forum' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/hal' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/help' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/help_topics' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/history' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/image' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/inline_form_errors' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/jsonapi' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/language' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/layout_builder' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/layout_discovery' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/legacy-project' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'drupal/link' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/locale' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/media' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/media_library' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/menu_link_content' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/menu_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/migrate' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/migrate_drupal' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/migrate_drupal_multilingual' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/migrate_drupal_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/minimal' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/node' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/options' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/page_cache' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/path' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/path_alias' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/quickedit' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/rdf' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/responsive_image' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/rest' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/search' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/serialization' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/settings_tray' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/seven' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/shortcut' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/simpletest' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/standard' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/stark' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/statistics' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/syslog' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/system' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/taxonomy' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/telephone' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/text' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/toolbar' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/tour' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/tracker' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/update' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/user' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/views' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/views_ui' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/workflows' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'drupal/workspaces' => 
    array (
      'replaced' => 
      array (
        0 => '8.9.14',
      ),
    ),
    'easyrdf/easyrdf' => 
    array (
      'pretty_version' => '0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acd09dfe0555fbcfa254291e433c45fdd4652566',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.17',
      'version' => '2.1.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ade6887fd9bd74177769645ab5c474824f8a418a',
    ),
    'emuse/behat-html-formatter' => 
    array (
      'pretty_version' => 'v0.2.0',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '89340a6f9908e727374528d208c728e060f92315',
    ),
    'fabpot/goutte' => 
    array (
      'pretty_version' => 'v3.2.3',
      'version' => '3.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3f0eaf0a40181359470651f1565b3e07e3dd31b8',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.4',
      'version' => '6.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => 'v1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a59da6cf61d80060647ff4d3eb2c03a2bc694646',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '239400de7a173fe9901b9ac7c06497751f00727a',
    ),
    'instaclick/php-webdriver' => 
    array (
      'pretty_version' => '1.4.7',
      'version' => '1.4.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b5f330e900e9b3edfc18024a5ec8c07136075712',
    ),
    'laminas/laminas-diactoros' => 
    array (
      'pretty_version' => '1.8.7p2',
      'version' => '1.8.7.0-patch2',
      'aliases' => 
      array (
      ),
      'reference' => '6991c1af7c8d2c8efee81b22ba97024781824aaa',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '25f2a053eadfa92ddacb609dcbbc39362610da70',
    ),
    'laminas/laminas-feed' => 
    array (
      'pretty_version' => '2.12.2',
      'version' => '2.12.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '8a193ac96ebcb3e16b6ee754ac2a889eefacb654',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b18347625a2f06a1a485acfbc870f699dbe51c6',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fcd87520e4943d968557803919523772475e8ea3',
    ),
    'masterminds/html5' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c37c6c520b995b761674de3be8455a381679067',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.99',
      'version' => '9.99.99.0',
      'aliases' => 
      array (
      ),
      'reference' => '84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
    ),
    'pear/archive_tar' => 
    array (
      'pretty_version' => '1.4.12',
      'version' => '1.4.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bb8e95490d3e3ad92fcac95500ca80bdcc7495',
    ),
    'pear/console_getopt' => 
    array (
      'pretty_version' => 'v1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a41f8d3e668987609178c7c4a9fe48fecac53fa0',
    ),
    'pear/pear-core-minimal' => 
    array (
      'pretty_version' => 'v1.10.10',
      'version' => '1.10.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '625a3c429d9b2c1546438679074cac1b089116a7',
    ),
    'pear/pear_exception' => 
    array (
      'pretty_version' => 'v1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbb42a5a0e45f3adcf99babfb2a1ba77b8ac36a7',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'roundcube/plugin-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'rsky/pear-core-min' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.10.10',
      ),
    ),
    'shama/baton' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'stack/builder' => 
    array (
      'pretty_version' => 'v1.0.5',
      'version' => '1.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb3d136d04c6be41120ebf8c0cc71fe9507d750a',
    ),
    'symfony-cmf/routing' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb1e7f85ff8c6866238b7e73a490a0a0243ae8ac',
    ),
    'symfony/browser-kit' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cfa8d92f95294747e3abc04969efee51ed374424',
    ),
    'symfony/class-loader' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4636a4f23f157278a19e5db160c63de0da297d8',
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '98606c6fa1a8f55ff964ccdd704275bf5b9f71b3',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bfe29ead7e7b1cc9ce74c6a40d06ad1f96fced13',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f907d3e53ecb2a5fad8609eb2f30525287a734c8',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => '518c6a00d0872da30bd06aee3ea59a0a5cf54d6d',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e39380b7104b0ec538a075ae919f00c7e5267bac',
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => 'v4.2.12',
      'version' => '4.2.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba1da8fb10291714b8db153fcf7ac515e1a217bb',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => '14d978f8e8555f2de719c00eb65376be7d2e9081',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.2.6',
      'version' => '5.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c86a82f51658188119e62cff0a050a12d09836f',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.2.8',
      'version' => '5.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eccb8be70d7a6a2230d05f6ecede40f3fdd9e252',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fbd216d2304b1a3fe38d6392b04729c8dd356359',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v3.4.44',
      'version' => '3.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '27dcaa8c6b18c75df9f37badeb4d3564ffaa1326',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c4de7601eefbf25f9d47190abe07f79fe0a27424',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3bff59ea7047e925be6b7f2059d60af31bb46d6a',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa79b11539418b02fc5e1897267673ba2c19419c',
    ),
    'symfony/polyfill-php56' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3c8c138280cdfe4b81488441555583aa1984e23',
    ),
    'symfony/polyfill-php70' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '82225c2d7d23d7e70515496d249c0152679b468e',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f048e612a3905f34931127360bdd2def19a5e582',
    ),
    'symfony/polyfill-util' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4afb4110fc037752cf0ce9869f9ab8162c4e20d7',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => '8a895f0c92a7c4b10db95139bcff71bdf66d4d21',
    ),
    'symfony/psr-http-message-bridge' => 
    array (
      'pretty_version' => 'v1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a33352af16f78a5ff4f9d90811536abf210df12b',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e0d43b6f9417ad59ecaa8e2f799b79eef417387f',
    ),
    'symfony/serializer' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => '0db90db012b1b0a04fbb2d64ae9160871cad9d4f',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0cd62ef0ff7ec31b67d78d7fc818e2bda4e844f',
    ),
    'symfony/validator' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => '5fb88120a11a75e17b602103a893dd8b27804529',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v3.4.41',
      'version' => '3.4.41.0',
      'aliases' => 
      array (
      ),
      'reference' => '7233ac2bfdde24d672f5305f2b3f6b5d741ef8eb',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v1.42.5',
      'version' => '1.42.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '87b2ea9d8f6fd014d0621ca089bb1b3769ea3f8e',
    ),
    'typo3/phar-stream-wrapper' => 
    array (
      'pretty_version' => 'v3.1.4',
      'version' => '3.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e0c1b495cfac064f4f5c4bcb6bf67bb7f345ed04',
    ),
    'zendframework/zend-diactoros' => 
    array (
      'replaced' => 
      array (
        0 => '~1.8.7.0',
      ),
    ),
    'zendframework/zend-escaper' => 
    array (
      'replaced' => 
      array (
        0 => '2.6.1',
      ),
    ),
    'zendframework/zend-feed' => 
    array (
      'replaced' => 
      array (
        0 => '^2.12.0',
      ),
    ),
    'zendframework/zend-stdlib' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.1',
      ),
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}

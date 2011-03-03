<?php 


$options['db_type'] = 'mysqli';
$options['db_host'] = 'localhost';
$options['db_passwd'] = 'X4SVtbYtLj';
$options['db_name'] = 'site_448_0';
$options['db_user'] = 'site_448_0';
$options['installed'] = true;
$options['aliases'] = array (
);
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.20',
      'description' => 'This platform is running Drupal 6.20',
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'name' => 'default',
      'filename' => '/var/aegir/platforms/drupal-6.x/profiles/default/default.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Drupal',
        'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
        'languages' => 
        array (
          0 => 'en',
        ),
        'version' => NULL,
      ),
      'version' => '6.20',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'blogapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/blogapi/blogapi.module',
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog API',
        'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to structure site pages in a hierarchy or outline.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Enables threaded discussions about general topics.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.20',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'ping' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/ping/ping.module',
      'name' => 'ping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ping',
        'description' => 'Alerts other sites when your site has been updated.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'throttle' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/throttle/throttle.module',
      'name' => 'throttle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Throttle',
        'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent posts for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'upload' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/upload/upload.module',
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upload',
        'description' => 'Allows users to upload and attach files to content.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'help_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/advanced_help/help_example/help_example.module',
      'name' => 'help_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help example',
        'description' => 'A example help module to demonstrate the advanced help module.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'advanced_help',
        ),
        'version' => '6.x-1.2',
        'project' => 'advanced_help',
        'datestamp' => '1238954409',
        'php' => '4.3.5',
      ),
      'project' => 'advanced_help',
      'version' => '6.x-1.2',
    ),
    'arrange_fields' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/arrange_fields/arrange_fields.module',
      'name' => 'arrange_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Arrange Fields',
        'description' => 'Arrange CCK, Webform, and other form fields using drag-and-drop.',
        'dependencies' => 
        array (
          0 => 'jquery_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'arrange_fields',
        'datestamp' => '1293664263',
        'php' => '4.3.5',
      ),
      'project' => 'arrange_fields',
      'version' => '6.x-1.4',
    ),
    'autoload' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/autoload/autoload.module',
      'name' => 'autoload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Autoload',
        'description' => 'Helper module to autoload classes under PHP 5.',
        'php' => '5.1.2',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'autoload',
        'datestamp' => '1277856609',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'autoload',
      'version' => '6.x-1.4',
    ),
    'calendar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/calendar/calendar.module',
      'name' => 'calendar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar',
        'description' => 'Views plugin to display views containing dates as Calendars.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'date_api',
          2 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
    ),
    'calendar_ical' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/calendar/calendar_ical/calendar_ical.module',
      'name' => 'calendar_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar iCal',
        'description' => 'Adds ical functionality to Calendar views.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'date_api',
          2 => 'calendar',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
    ),
    'calendar_multiday' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/calendar/calendar_multiday/calendar_multiday.module',
      'name' => 'calendar_multiday',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar Multiday',
        'description' => 'Use the calendar multiday display as an alternative to the standard display. (BETA version)',
        'dependencies' => 
        array (
          0 => 'calendar',
          1 => 'views',
        ),
        'core' => '6.x',
        'php' => '5.2',
        'package' => 'Date/Time',
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
    ),
    'jcalendar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/calendar/jcalendar/jcalendar.module',
      'name' => 'jcalendar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar Popup',
        'description' => 'Replaces the links to calendar items with a javascript popup that gracefully regresses if javascript is not enabled',
        'dependencies' => 
        array (
          0 => 'calendar',
          1 => 'views',
        ),
        'core' => '6.x',
        'package' => 'Date/Time',
        'version' => '6.x-2.4',
        'project' => 'calendar',
        'datestamp' => '1294072550',
        'php' => '4.3.5',
      ),
      'project' => 'calendar',
      'version' => '6.x-2.4',
    ),
    'content_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/content_permissions/content_permissions.module',
      'name' => 'content_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Permissions',
        'description' => 'Set field-level permissions for CCK fields.',
        'package' => 'CCK',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'userreference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/userreference/userreference.module',
      'name' => 'userreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'charts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts/charts.module',
      'name' => 'charts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'description' => 'Transform DATA into INFORMATION using beautiful CHARTS.',
        'name' => 'Charts',
        'package' => 'Charts',
        'php' => '5.2',
        'version' => '6.x-1.0',
        'project' => 'charts',
        'datestamp' => '1278033305',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'charts',
      'version' => '6.x-1.0',
    ),
    'charts_system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts/charts_system/charts_system.module',
      'name' => 'charts_system',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'charts',
        ),
        'description' => 'Use Charts for Drupal administration',
        'name' => 'Charts System',
        'package' => 'Charts',
        'version' => '6.x-1.0',
        'project' => 'charts',
        'datestamp' => '1278033305',
        'php' => '4.3.5',
      ),
      'project' => 'charts',
      'version' => '6.x-1.0',
    ),
    'gd_image_chart' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts/gd_image_chart/gd_image_chart.module',
      'name' => 'gd_image_chart',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'charts',
        ),
        'description' => 'Use GD library to draw charts on your site. This provider generates images and stores them in your sites default path, be sure to consult the admin page after installation',
        'name' => 'GD Image Chart',
        'package' => 'Charts',
        'version' => '6.x-1.0',
        'project' => 'charts',
        'datestamp' => '1278033305',
        'php' => '4.3.5',
      ),
      'project' => 'charts',
      'version' => '6.x-1.0',
    ),
    'google_charts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts/google_charts/google_charts.module',
      'name' => 'google_charts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'charts',
        ),
        'description' => 'Use Google Charts on your site.',
        'name' => 'Google',
        'package' => 'Charts',
        'version' => '6.x-1.0',
        'project' => 'charts',
        'datestamp' => '1278033305',
        'php' => '4.3.5',
      ),
      'project' => 'charts',
      'version' => '6.x-1.0',
    ),
    'charts_graphs_amcharts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts_graphs/apis/charts_graphs_amcharts/charts_graphs_amcharts.module',
      'name' => 'charts_graphs_amcharts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Charts and Graphs: amCharts',
        'description' => 'amCharts implementation for Charts and Graphs.',
        'dependencies' => 
        array (
          0 => 'charts_graphs',
          1 => 'swftools',
        ),
        'package' => 'Charts',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-2.6',
        'project' => 'charts_graphs',
        'datestamp' => '1290046267',
      ),
      'project' => 'charts_graphs',
      'version' => '6.x-2.6',
    ),
    'charts_graphs_bluff' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts_graphs/apis/charts_graphs_bluff/charts_graphs_bluff.module',
      'name' => 'charts_graphs_bluff',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Charts and Graphs: Bluff',
        'description' => 'Bluff (Beautiful Graphs in JavaScript) implementation for Charts and Graphs.',
        'dependencies' => 
        array (
          0 => 'charts_graphs',
        ),
        'package' => 'Charts',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-2.6',
        'project' => 'charts_graphs',
        'datestamp' => '1290046267',
      ),
      'project' => 'charts_graphs',
      'version' => '6.x-2.6',
    ),
    'charts_graphs_google_charts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts_graphs/apis/charts_graphs_google_charts/charts_graphs_google_charts.module',
      'name' => 'charts_graphs_google_charts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Charts and Graphs: Google Charts',
        'description' => 'Google Charts implementation for Charts and Graphs.',
        'dependencies' => 
        array (
          0 => 'charts_graphs',
        ),
        'package' => 'Charts',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-2.6',
        'project' => 'charts_graphs',
        'datestamp' => '1290046267',
      ),
      'project' => 'charts_graphs',
      'version' => '6.x-2.6',
    ),
    'charts_graphs_open_flash' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts_graphs/apis/charts_graphs_open_flash/charts_graphs_open_flash.module',
      'name' => 'charts_graphs_open_flash',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Charts and Graphs: Open Flash Charts 2',
        'description' => 'Open Flash Charts 2 implementation for Charts and Graphs.',
        'dependencies' => 
        array (
          0 => 'charts_graphs',
          1 => 'swftools',
        ),
        'package' => 'Charts',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-2.6',
        'project' => 'charts_graphs',
        'datestamp' => '1290046267',
      ),
      'project' => 'charts_graphs',
      'version' => '6.x-2.6',
    ),
    'charts_graphs' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/charts_graphs/charts_graphs.module',
      'name' => 'charts_graphs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Charts and Graphs',
        'description' => 'Charts and Graphs Core API.',
        'package' => 'Charts',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-2.6',
        'project' => 'charts_graphs',
        'datestamp' => '1290046267',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'charts_graphs',
      'version' => '6.x-2.6',
    ),
    'colorpicker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/colorpicker/colorpicker.module',
      'name' => 'colorpicker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorpicker',
        'description' => 'Adds a custom form element type called a colorpicker.',
        'package' => 'Colorpicker',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'colorpicker',
        'datestamp' => '1266994808',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'colorpicker',
      'version' => '6.x-2.0',
    ),
    'colorpicker_cck' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/colorpicker/colorpicker_cck.module',
      'name' => 'colorpicker_cck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorpicker Widget',
        'description' => 'Adds a color picker widget.',
        'package' => 'CCK',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'colorpicker',
          1 => 'content',
          2 => 'text',
        ),
        'version' => '6.x-2.0',
        'project' => 'colorpicker',
        'datestamp' => '1266994808',
        'php' => '4.3.5',
      ),
      'project' => 'colorpicker',
      'version' => '6.x-2.0',
    ),
    'colorpicker_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/colorpicker/examples/colorpicker_example.module',
      'name' => 'colorpicker_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorpicker Example',
        'description' => 'Shows an example of the colorpicker in action.',
        'core' => '6.x',
        'package' => 'Colorpicker',
        'version' => '6.x-2.0',
        'project' => 'colorpicker',
        'datestamp' => '1266994808',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'colorpicker',
      'version' => '6.x-2.0',
    ),
    'content_taxonomy_tree' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/content_taxonomy/content_taxonomy_tree.module',
      'name' => 'content_taxonomy_tree',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Taxonomy Tree',
        'description' => 'Defines a dynamic tree widget for Content Taxonomy',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'content_taxonomy',
          2 => 'taxonomy',
          3 => 'taxonomy_manager',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.0-rc2',
        'project' => 'content_taxonomy',
        'datestamp' => '1250688034',
        'php' => '4.3.5',
      ),
      'project' => 'content_taxonomy',
      'version' => '6.x-1.0-rc2',
    ),
    'css_injector' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/css_injector/css_injector.module',
      'name' => 'css_injector',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CSS Injector',
        'description' => 'Adds CSS to the page output based on configurable rules.',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'css_injector',
        'datestamp' => '1218333619',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'css_injector',
      'version' => '6.x-1.3',
    ),
    'date' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Defines CCK date/time fields and widgets.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date_api',
          2 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date_locale/date_locale.module',
      'name' => 'date_locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Locale',
        'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'locale',
        ),
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_php4' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date_php4/date_php4.module',
      'name' => 'date_php4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date PHP4',
        'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_popup' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_repeat' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_tools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/devel/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer block and page illustrating relevant node_access records.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
    ),
    'performance' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/devel/performance/performance.module',
      'name' => 'performance',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Performance Logging',
        'description' => 'Logs detailed and/or summary page generation time and memory consumption for page requests.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
    ),
    'devel_themer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/devel_themer/devel_themer.module',
      'name' => 'devel_themer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme developer',
        'description' => 'Essential theme API information for theme developers',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'devel',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'devel_themer',
        'datestamp' => '1278833941',
        'php' => '4.3.5',
      ),
      'project' => 'devel_themer',
      'version' => '6.x-1.x-dev',
    ),
    'dhtml_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/dhtml_menu/dhtml_menu.module',
      'name' => 'dhtml_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DHTML Menu',
        'description' => 'Opens menus dynamically to reduce page refreshes.',
        'core' => '6.x',
        'version' => '6.x-3.5',
        'project' => 'dhtml_menu',
        'datestamp' => '1244161838',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'dhtml_menu',
      'version' => '6.x-3.5',
    ),
    'email' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/email/email.module',
      'name' => 'email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Email',
        'description' => 'Defines an email field type for cck',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'email',
        'datestamp' => '1244921128',
        'php' => '4.3.5',
      ),
      'project' => 'email',
      'version' => '6.x-1.2',
    ),
    'ahah_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'ahah_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'batch_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'batch_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'block_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'block_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'element_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'element_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'email_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'email_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'filter_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'filter_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'form_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'form_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'menu_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'menu_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'nodeapi_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'nodeapi_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_access_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'node_access_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'node_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'page_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'page_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'scaffolding_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'scaffolding_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'simpletest_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'simpletest_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'trigger_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'trigger_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'vertical_tabs_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'vertical_tabs_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'xmlrpc_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'xmlrpc_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'feedapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedapi/feedapi.module',
      'name' => 'feedapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI',
        'description' => 'Provides feed aggregation functionality, a feed management interface and an API. If you enable this module, enable at least one item processor (e. g. FeedAPI Node Item) and one parser (e. g. SimplePie parser).',
        'package' => 'FeedAPI Default',
        'core' => '6.x',
        'php' => '4.0',
        'version' => '6.x-1.9-beta3',
        'project' => 'feedapi',
        'datestamp' => '1257806483',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.9-beta3',
    ),
    'feedapi_inherit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedapi/feedapi_inherit/feedapi_inherit.module',
      'name' => 'feedapi_inherit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI Inherit',
        'description' => 'Passes on group and taxonomy information from feed to feed items. Requires FeedAPI Node processor.',
        'dependencies' => 
        array (
          0 => 'feedapi',
          1 => 'feedapi_node',
        ),
        'package' => 'FeedAPI Add On',
        'core' => '6.x',
        'version' => '6.x-1.9-beta3',
        'project' => 'feedapi',
        'datestamp' => '1257806483',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.9-beta3',
    ),
    'feedapi_node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedapi/feedapi_node/feedapi_node.module',
      'name' => 'feedapi_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI Node',
        'description' => 'Creates nodes from feed items.',
        'dependencies' => 
        array (
          0 => 'feedapi',
        ),
        'package' => 'FeedAPI Default',
        'core' => '6.x',
        'version' => '6.x-1.9-beta3',
        'project' => 'feedapi',
        'datestamp' => '1257806483',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.9-beta3',
    ),
    'feedapi_stat' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedapi/feedapi_stat/feedapi_stat.module',
      'name' => 'feedapi_stat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI Statistics',
        'description' => 'Visualizes FeedAPI performance statistics.',
        'package' => 'FeedAPI Add On',
        'dependencies' => 
        array (
          0 => 'feedapi',
          1 => 'sparkline',
        ),
        'core' => '6.x',
        'version' => '6.x-1.9-beta3',
        'project' => 'feedapi',
        'datestamp' => '1257806483',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.9-beta3',
    ),
    'parser_common_syndication' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedapi/parser_common_syndication/parser_common_syndication.module',
      'name' => 'parser_common_syndication',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common syndication parser',
        'description' => 'Provides an XML parser for FeedAPI modules. Requires PHP5.',
        'package' => 'FeedAPI Add On',
        'dependencies' => 
        array (
          0 => 'feedapi',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.9-beta3',
        'project' => 'feedapi',
        'datestamp' => '1257806483',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.9-beta3',
    ),
    'parser_simplepie' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedapi/parser_simplepie/parser_simplepie.module',
      'name' => 'parser_simplepie',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimplePie parser',
        'description' => 'Provides an XML parser for FeedAPI modules. Uses SimplePie library. Requires SimplePie 1.01+.',
        'package' => 'FeedAPI Default',
        'dependencies' => 
        array (
          0 => 'feedapi',
        ),
        'core' => '6.x',
        'version' => '6.x-1.9-beta3',
        'project' => 'feedapi',
        'datestamp' => '1257806483',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi',
      'version' => '6.x-1.9-beta3',
    ),
    'feedapi_mapper' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedapi_mapper/feedapi_mapper.module',
      'name' => 'feedapi_mapper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FeedAPI Mapper',
        'description' => 'Maps feed item elements to node fields.',
        'dependencies' => 
        array (
          0 => 'feedapi_node',
          1 => 'feedapi',
        ),
        'package' => 'FeedAPI Add On',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'feedapi_mapper',
        'datestamp' => '1258572983',
        'php' => '4.3.5',
      ),
      'project' => 'feedapi_mapper',
      'version' => '6.x-1.3',
    ),
    'feedback' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feedback/feedback.module',
      'name' => 'feedback',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feedback',
        'description' => 'Allows site visitors and users to report issues about this site.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'feedback',
        'datestamp' => '1264632306',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'feedback',
      'version' => '6.x-2.1',
    ),
    'feeds' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feeds/feeds.module',
      'name' => 'feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds',
        'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'job_scheduler',
        ),
        'core' => '6.x',
        'php' => '5.2',
        'version' => '6.x-1.0-beta10',
        'project' => 'feeds',
        'datestamp' => '1288369547',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_defaults' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'feeds_defaults',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'feeds_fast_news' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feeds/feeds_fast_news/feeds_fast_news.module',
      'name' => 'feeds_fast_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'data',
          1 => 'feeds',
        ),
        'description' => 'A fast news aggregator built with feeds, creates flat database records from imported feed items.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'data:data_default:1',
            1 => 'data:data_table:1',
            2 => 'feeds:feeds_importer_default:1',
          ),
          'data_tables' => 
          array (
            0 => 'feeds_data_feed_fast',
          ),
          'feeds_importer' => 
          array (
            0 => 'feed_fast',
          ),
          'node' => 
          array (
            0 => 'feed_fast',
          ),
        ),
        'name' => 'Feeds Fast News',
        'package' => 'Feeds',
        'project' => 'feeds',
        'version' => '6.x-1.0-beta10',
        'datestamp' => '1288369547',
        'php' => '4.3.5',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_import' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feeds/feeds_import/feeds_import.module',
      'name' => 'feeds_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'description' => 'An example of a node importer and a user importer.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
          ),
          'feeds_importer' => 
          array (
            0 => 'node',
            1 => 'user',
          ),
        ),
        'name' => 'Feeds Import',
        'package' => 'Feeds',
        'project' => 'feeds',
        'version' => '6.x-1.0-beta10',
        'datestamp' => '1288369547',
        'php' => '4.3.5',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_news' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feeds/feeds_news/feeds_news.module',
      'name' => 'feeds_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'feeds',
          1 => 'views',
        ),
        'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
          ),
          'feeds_importer' => 
          array (
            0 => 'feed',
            1 => 'opml',
          ),
          'node' => 
          array (
            0 => 'feed',
            1 => 'feed_item',
          ),
          'views' => 
          array (
            0 => 'feeds_defaults_feed_items',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Feeds News',
        'package' => 'Feeds',
        'project' => 'feeds',
        'version' => '6.x-1.0-beta10',
        'datestamp' => '1288369547',
        'php' => '4.3.5',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'feeds_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/feeds/feeds_ui/feeds_ui.module',
      'name' => 'feeds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Admin UI',
        'description' => 'Administrative UI for Feeds module.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'core' => '6.x',
        'php' => '5.2',
        'version' => '6.x-1.0-beta10',
        'project' => 'feeds',
        'datestamp' => '1288369547',
      ),
      'project' => 'feeds',
      'version' => '6.x-1.0-beta10',
    ),
    'filedepot' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/filedepot/filedepot.module',
      'name' => 'filedepot',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filedepot',
        'version' => '6.x-1.0-rc2',
        'description' => 'Filedepot File Management System',
        'core' => '6.x',
        'php' => '5.x;',
        'dependencies' => 
        array (
          0 => 'filefield',
        ),
        'package' => 'File management',
        'project' => 'filedepot',
        'datestamp' => '1272333006',
      ),
      'project' => 'filedepot',
      'version' => '6.x-1.0-rc2',
    ),
    'filefield_meta' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/filefield/filefield_meta/filefield_meta.module',
      'name' => 'filefield_meta',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField Meta',
        'description' => 'Add metadata gathering and storage to FileField.',
        'dependencies' => 
        array (
          0 => 'filefield',
          1 => 'getid3',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.9',
        'project' => 'filefield',
        'datestamp' => '1292197563',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.9',
    ),
    'filefield_paths' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/filefield_paths/filefield_paths.module',
      'name' => 'filefield_paths',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField Paths',
        'description' => 'Adds improved Token based file sorting and renaming functionalities.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'package' => 'FileField Paths',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'filefield_paths',
        'datestamp' => '1263190506',
        'php' => '4.3.5',
      ),
      'project' => 'filefield_paths',
      'version' => '6.x-1.4',
    ),
    'fusioncharts_system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/fusioncharts/contrib/fusioncharts_system/fusioncharts_system.module',
      'name' => 'fusioncharts_system',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Charts for System modules',
        'core' => '6.x',
        'description' => 'Integration of Fusion Charts with core system modules.',
        'package' => 'Fusion Charts',
        'dependencies' => 
        array (
          0 => 'fusioncharts',
        ),
        'version' => '6.x-1.0',
        'project' => 'fusioncharts',
        'datestamp' => '1240617028',
        'php' => '4.3.5',
      ),
      'project' => 'fusioncharts',
      'version' => '6.x-1.0',
    ),
    'fusioncharts_webform' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/fusioncharts/contrib/fusioncharts_webform/fusioncharts_webform.module',
      'name' => 'fusioncharts_webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Charts for Webforms',
        'core' => '6.x',
        'description' => 'Integration of Fusion Charts with Webforms.',
        'package' => 'Fusion Charts',
        'dependencies' => 
        array (
          0 => 'fusioncharts',
          1 => 'webform',
        ),
        'version' => '6.x-1.0',
        'project' => 'fusioncharts',
        'datestamp' => '1240617028',
        'php' => '4.3.5',
      ),
      'project' => 'fusioncharts',
      'version' => '6.x-1.0',
    ),
    'fusioncharts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/fusioncharts/fusioncharts.module',
      'name' => 'fusioncharts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Charts',
        'core' => '6.x',
        'package' => 'Fusion Charts',
        'description' => 'Integration with Fusion Charts Free.',
        'version' => '6.x-1.0',
        'project' => 'fusioncharts',
        'datestamp' => '1240617028',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'fusioncharts',
      'version' => '6.x-1.0',
    ),
    'fusioncharts_cck' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/fusioncharts/fusioncharts_cck/fusioncharts_cck.module',
      'name' => 'fusioncharts_cck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FusionCharts for CCK',
        'description' => 'Allows FusionCharts to be created with CCK',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'fusioncharts',
        ),
        'package' => 'Fusion Charts',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'fusioncharts',
        'datestamp' => '1240617028',
        'php' => '4.3.5',
      ),
      'project' => 'fusioncharts',
      'version' => '6.x-1.0',
    ),
    'fusioncharts_node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/fusioncharts/fusioncharts_node/fusioncharts_node.module',
      'name' => 'fusioncharts_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Charts for Nodes',
        'core' => '6.x',
        'package' => 'Fusion Charts',
        'description' => 'Create Fusion Charts nodes.',
        'dependencies' => 
        array (
          0 => 'fusioncharts',
          1 => 'colorpicker',
        ),
        'version' => '6.x-1.0',
        'project' => 'fusioncharts',
        'datestamp' => '1240617028',
        'php' => '4.3.5',
      ),
      'project' => 'fusioncharts',
      'version' => '6.x-1.0',
    ),
    'fusioncharts_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/fusioncharts/fusioncharts_test/fusioncharts_test.module',
      'name' => 'fusioncharts_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Charts example suite',
        'core' => '6.x',
        'package' => 'Fusion Charts',
        'description' => 'Fusion Charts examples.',
        'dependencies' => 
        array (
          0 => 'fusioncharts',
        ),
        'version' => '6.x-1.0',
        'project' => 'fusioncharts',
        'datestamp' => '1240617028',
        'php' => '4.3.5',
      ),
      'project' => 'fusioncharts',
      'version' => '6.x-1.0',
    ),
    'getid3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/getid3/getid3.module',
      'name' => 'getid3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'getID3()',
        'description' => 'getID3() extracts useful information from multimedia file formats.',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'getid3',
        'datestamp' => '1259199334',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'getid3',
      'version' => '6.x-1.3',
    ),
    'htmlmail' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/htmlmail/htmlmail.module',
      'name' => 'htmlmail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HTML Mail',
        'description' => 'Enable HTML in system emails',
        'package' => 'Mail',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'htmlmail',
        'datestamp' => '1267170007',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'htmlmail',
      'version' => '6.x-1.3',
    ),
    'imageapi_imagemagick' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imageapi/imageapi_imagemagick.module',
      'name' => 'imageapi_imagemagick',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI ImageMagick',
        'description' => 'Command Line ImageMagick support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'imageapi',
        'datestamp' => '1287340884',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.9',
    ),
    'invisimail' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/invisimail/invisimail.module',
      'name' => 'invisimail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'invisimail',
        'description' => 'Attempts to thwart spam-bots by encoding email addresses.',
        'dependencies' => 
        array (
          0 => 'filter',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'invisimail',
        'datestamp' => '1251245808',
        'php' => '4.3.5',
      ),
      'project' => 'invisimail',
      'version' => '6.x-1.x-dev',
    ),
    'job_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/job_scheduler/job_scheduler.module',
      'name' => 'job_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler',
        'description' => 'Scheduler API',
        'core' => '6.x',
        'php' => '5.2',
        'version' => '6.x-1.0-beta3',
        'project' => 'job_scheduler',
        'datestamp' => '1284491510',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'job_scheduler',
      'version' => '6.x-1.0-beta3',
    ),
    'jquerymenu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/jquerymenu/jquerymenu.module',
      'name' => 'jquerymenu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Jquery Menu',
        'description' => 'Enables expandable jquery menus.',
        'package' => 'Advanced Navigation Pack',
        'core' => '6.x',
        'version' => '6.x-3.3',
        'project' => 'jquerymenu',
        'datestamp' => '1273902006',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquerymenu',
      'version' => '6.x-3.3',
    ),
    'mass_contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/mass_contact/mass_contact.module',
      'name' => 'mass_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mass Contact',
        'description' => 'Enables site administrator or privileged users to send mass e-mails to registered users. (This module will take advantage of the Token module, if it is installed and enabled, but does not require it.)',
        'package' => 'Mail',
        'core' => '6.x',
        'php' => '4.3.5',
        'version' => '6.x-1.0-beta2',
        'project' => 'mass_contact',
        'datestamp' => '1224794120',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'mass_contact',
      'version' => '6.x-1.0-beta2',
    ),
    'maxlength' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/maxlength/maxlength.module',
      'name' => 'maxlength',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '2',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Maxlength',
        'description' => 'Set a maximum length for body fields.',
        'core' => '6.x',
        'version' => '6.x-2.0-beta1',
        'project' => 'maxlength',
        'datestamp' => '1249467378',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'maxlength',
      'version' => '6.x-2.0-beta1',
    ),
    'mimedetect' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/mimedetect/mimedetect.module',
      'name' => 'mimedetect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'MimeDetect',
        'description' => 'Provides common mime type detection for Drupal sites.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'mimedetect',
        'datestamp' => '1241891444',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mimedetect',
      'version' => '6.x-1.2',
    ),
    'mollom' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/mollom/mollom.module',
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom',
        'description' => 'Protects forms against spam.',
        'core' => '6.x',
        'version' => '6.x-1.15',
        'project' => 'mollom',
        'datestamp' => '1288636847',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mollom',
      'version' => '6.x-1.15',
    ),
    'mollom_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/mollom/tests/mollom_test.module',
      'name' => 'mollom_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom Test',
        'description' => 'Testing module for Mollom functionality. Do not enable.',
        'core' => '6.x',
        'package' => 'Testing',
        'hidden' => true,
        'php' => '5',
        'version' => '6.x-1.15',
        'project' => 'mollom',
        'datestamp' => '1288636847',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'mollom',
      'version' => '6.x-1.15',
    ),
    'nice_menus' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/nice_menus/nice_menus.module',
      'name' => 'nice_menus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nice Menus',
        'description' => 'CSS/jQuery drop-down, drop-right and drop-left menus to be placed in blocks',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'nice_menus',
        'datestamp' => '1228075824',
        'php' => '4.3.5',
      ),
      'project' => 'nice_menus',
      'version' => '6.x-1.3',
    ),
    'clone' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/node_clone/clone.module',
      'name' => 'clone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Clone module',
        'description' => 'Allows users to clone (copy then edit) an existing node.',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'node_clone',
        'datestamp' => '1224096343',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'node_clone',
      'version' => '6.x-1.0',
    ),
    'node_export_file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/node_export/modules/node_export_file/node_export_file.module',
      'name' => 'node_export_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Export Files',
        'description' => 'Export helper module for handling files (CCK FileField, Upload, and Image).',
        'dependencies' => 
        array (
          0 => 'node_export',
        ),
        'version' => '6.x-2.24',
        'core' => '6.x',
        'project' => 'node_export',
        'datestamp' => '1291874138',
        'php' => '4.3.5',
      ),
      'project' => 'node_export',
      'version' => '6.x-2.24',
    ),
    'node_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/node_export/node_export.module',
      'name' => 'node_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Export',
        'description' => 'Allows users to export a node and the import into another Drupal installation.',
        'core' => '6.x',
        'version' => '6.x-2.24',
        'project' => 'node_export',
        'datestamp' => '1291874138',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'node_export',
      'version' => '6.x-2.24',
    ),
    'node_import' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/node_import/node_import.module',
      'name' => 'node_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node import',
        'description' => 'Allows users to import node content from a CSV or TSV file.',
        'package' => 'Development',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'advanced_help',
        ),
        'version' => '6.x-1.0-rc4',
        'project' => 'node_import',
        'datestamp' => '1235601068',
      ),
      'project' => 'node_import',
      'version' => '6.x-1.0-rc4',
    ),
    'notifications' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/notifications/notifications.module',
      'name' => 'notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications',
        'description' => 'The basic notifications framework',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'token',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_autosubscribe' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/notifications/notifications_autosubscribe/notifications_autosubscribe.module',
      'name' => 'notifications_autosubscribe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Autosubscribe',
        'description' => 'Provides automatic notifications.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications',
          1 => 'notifications_content',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/notifications/notifications_content/notifications_content.module',
      'name' => 'notifications_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Notifications',
        'description' => 'Allows users to subscribe to content related events.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_lite' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/notifications/notifications_lite/notifications_lite.module',
      'name' => 'notifications_lite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Lite',
        'description' => 'Extra Simple Notifications API. Enable only when required by other modules.',
        'package' => 'Notifications',
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_tags' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/notifications/notifications_tags/notifications_tags.module',
      'name' => 'notifications_tags',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Notifications',
        'description' => 'Allows users to subscribe to taxonomy terms.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications_content',
          1 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/notifications/notifications_ui/notifications_ui.module',
      'name' => 'notifications_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications UI',
        'description' => 'Provides an UI to notifications',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'notifications_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/notifications/notifications_views/notifications_views.module',
      'name' => 'notifications_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Views',
        'description' => 'Views integration for Notifications.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'notifications',
        ),
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'notifications',
        'datestamp' => '1258139773',
        'php' => '4.3.5',
      ),
      'project' => 'notifications',
      'version' => '6.x-2.2',
    ),
    'open_flash_chart_api' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/open_flash_chart_api/open_flash_chart_api.module',
      'name' => 'open_flash_chart_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Open Flash Chart API',
        'description' => 'Allows users and developers to create flash charts.',
        'core' => '6.x',
        'version' => '6.x-2.12',
        'project' => 'open_flash_chart_api',
        'datestamp' => '1273089009',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'open_flash_chart_api',
      'version' => '6.x-2.12',
    ),
    'parser_ical' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/parser_ical/parser_ical.module',
      'name' => 'parser_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'iCal parser',
        'description' => 'Provides an iCal parser for FeedAPI modules. Requires PHP5.',
        'package' => 'FeedAPI Add On',
        'dependencies' => 
        array (
          0 => 'feedapi',
          1 => 'date_api',
        ),
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.1',
        'project' => 'parser_ical',
        'datestamp' => '1237224334',
      ),
      'project' => 'parser_ical',
      'version' => '6.x-1.1',
    ),
    'print' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/print/print.module',
      'name' => 'print',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Printer-friendly pages',
        'description' => 'Adds a printer-friendly version link to content and administrative pages.',
        'core' => '6.x',
        'package' => 'Printer, e-mail and PDF versions',
        'version' => '6.x-1.12',
        'project' => 'print',
        'datestamp' => '1282446093',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'print',
      'version' => '6.x-1.12',
    ),
    'print_mail' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/print/print_mail/print_mail.module',
      'name' => 'print_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Send by e-mail',
        'description' => 'Provides the capability to send the web page by e-mail',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'core' => '6.x',
        'package' => 'Printer, e-mail and PDF versions',
        'version' => '6.x-1.12',
        'project' => 'print',
        'datestamp' => '1282446093',
        'php' => '4.3.5',
      ),
      'project' => 'print',
      'version' => '6.x-1.12',
    ),
    'print_pdf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/print/print_pdf/print_pdf.module',
      'name' => 'print_pdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PDF version',
        'description' => 'Adds the capability to export pages as PDF.',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'core' => '6.x',
        'package' => 'Printer, e-mail and PDF versions',
        'version' => '6.x-1.12',
        'project' => 'print',
        'datestamp' => '1282446093',
        'php' => '4.3.5',
      ),
      'project' => 'print',
      'version' => '6.x-1.12',
    ),
    'qpcache' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/querypath/qpcache/qpcache.module',
      'name' => 'qpcache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'QPCache',
        'package' => 'QueryPath',
        'description' => 'An XML caching layer for QueryPath or other tools.',
        'core' => '6.x',
        'php' => '5.1',
        'dependencies' => 
        array (
          0 => 'querypath',
        ),
        'version' => '6.x-1.5',
        'project' => 'querypath',
        'datestamp' => '1250821878',
      ),
      'project' => 'querypath',
      'version' => '6.x-1.5',
    ),
    'querypath' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/querypath/querypath.module',
      'name' => 'querypath',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'QueryPath',
        'description' => 'QueryPath is a developer tool for working with HTML and XML.',
        'core' => '6.x',
        'php' => '5.2',
        'package' => 'QueryPath',
        'version' => '6.x-1.5',
        'project' => 'querypath',
        'datestamp' => '1250821878',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'querypath',
      'version' => '6.x-1.5',
    ),
    'querypath_examples' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/querypath/querypath_examples.module',
      'name' => 'querypath_examples',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'QueryPath Examples',
        'package' => 'QueryPath',
        'description' => 'View and run some examples of QueryPath.',
        'core' => '6.x',
        'php' => '5.2',
        'dependencieds' => 
        array (
          0 => 'querypath',
        ),
        'version' => '6.x-1.5',
        'project' => 'querypath',
        'datestamp' => '1250821878',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'querypath',
      'version' => '6.x-1.5',
    ),
    'ajax_quiz' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/includes/ajax_quiz/ajax_quiz.module',
      'name' => 'ajax_quiz',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Quiz',
        'description' => 'This module doesn\'t degrade gracefully, and we don\'t recommend using it until it does. This module attempts to provide an AJAX version of quiz. Successive quiz questions will be loaded in the same page without page reload, but it doesn\'t work flawlessly at the moment.',
        'dependencies' => 
        array (
          0 => 'quiz',
        ),
        'core' => '6.x',
        'package' => 'Quiz Addon',
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
        'php' => '4.3.5',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'questions_import' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'questions_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'quiz_stats' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/includes/quiz_stats/quiz_stats.module',
      'name' => 'quiz_stats',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quiz Statistics',
        'description' => 'Creates a report to compare and analyse the results of quiz attendees.',
        'core' => '6.x',
        'php' => '5',
        'package' => 'Quiz Addon',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'chart',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'long_answer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/long_answer/long_answer.module',
      'name' => 'long_answer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Long Answer',
        'package' => 'Quiz Question',
        'description' => 'This provides long answer (essay, multi-paragraph) question types for use by the Quiz module.',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'quiz_question',
        ),
        'core' => '6.x',
        'php' => '5',
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'matching' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/matching/matching.module',
      'name' => 'matching',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Matching question',
        'package' => 'Quiz Question',
        'description' => 'Provide a way to create matching type of questions.',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'quiz_question',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'multichoice' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/multichoice/multichoice.module',
      'name' => 'multichoice',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quiz Multichoice',
        'package' => 'Quiz Question',
        'description' => 'Multiple choice question type for quiz.',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'quiz_question',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'quiz_directions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/quiz_directions/quiz_directions.module',
      'name' => 'quiz_directions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quiz Direction',
        'package' => 'Quiz Question',
        'description' => 'Provide a slot to add directions for a quiz or some sub-portion of a quiz.',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'quiz_question',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'quiz_question' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/quiz_question/quiz_question.module',
      'name' => 'quiz_question',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quiz Question',
        'package' => 'Quiz Core',
        'description' => 'Helper module for all quiz question types',
        'core' => '6.x',
        'php' => '5.2',
        'dependencies' => 
        array (
          0 => 'autoload',
          1 => 'quiz',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'scale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/scale/scale.module',
      'name' => 'scale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Scale',
        'package' => 'Quiz Question',
        'description' => 'Scale question type for quiz.',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'quiz_question',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'short_answer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/short_answer/short_answer.module',
      'name' => 'short_answer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Short Answer',
        'package' => 'Quiz Question',
        'description' => 'Short answer question type for Quiz.',
        'core' => '6.x',
        'php' => '5.1',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'quiz_question',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'truefalse' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/question_types/truefalse/truefalse.module',
      'name' => 'truefalse',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'True False',
        'package' => 'Quiz Question',
        'description' => 'Module to create True or False Kind of Questions',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'quiz',
          1 => 'quiz_question',
        ),
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'quiz' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/quiz/quiz.module',
      'name' => 'quiz',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quiz',
        'package' => 'Quiz Core',
        'description' => 'Create interactive, multipage quizzes. This module must have at least one question-type module enabled in order to function properly. If in doubt, use the Multichoice module.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-4.0-rc9',
        'project' => 'quiz',
        'datestamp' => '1284285107',
      ),
      'project' => 'quiz',
      'version' => '6.x-4.0-rc9',
    ),
    'resizable_cck' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/resizable_body/resizable_cck/resizable_cck.module',
      'name' => 'resizable_cck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Resizable CCK Text Fields',
        'description' => 'Add columns and height adjustment options for CCK textarea fields.',
        'package' => 'Resizable Fields',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'resizable_body',
        ),
        'version' => '6.x-2.0',
        'project' => 'resizable_body',
        'datestamp' => '1239605780',
        'php' => '4.3.5',
      ),
      'project' => 'resizable_body',
      'version' => '6.x-2.0',
    ),
    'rules_admin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Administration UI',
        'description' => 'Provides the administration UI for rules.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'rules',
        'datestamp' => '1283439108',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.3',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of rule sets.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'rules',
        'datestamp' => '1283439108',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.3',
    ),
    'rules_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/rules/rules_test/rules_test.module',
      'name' => 'rules_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Simpletest',
        'description' => 'Tests the functionality of the rule engine',
        'package' => 'Rules',
        'dependencies' => 
        array (
          0 => 'simpletest',
          1 => 'rules',
        ),
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'rules',
        'datestamp' => '1283439108',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.3',
    ),
    'signup_confirm_email' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_confirm_email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_status_cert' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_status_cert',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_status_invite' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_status_invite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_status_limit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_status_limit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_status_log' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_status_log',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_status_mailer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_status_mailer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_status_notifications' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_status_notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signup_status' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x',
      'name' => 'signup_status',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'simplepie' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/simplepie/simplepie.module',
      'name' => 'simplepie',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimplePie Core',
        'description' => 'Ensures that the SimplePie library is installed. Makes SimplePie available to other modules.',
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'simplepie',
        'datestamp' => '1242203507',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'simplepie',
      'version' => '6.x-1.0-beta1',
    ),
    'flowplayer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/flowplayer/flowplayer.module',
      'name' => 'flowplayer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlowPlayer',
        'description' => 'Enables support for FlowPlayer.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'flowplayer3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/flowplayer3/flowplayer3.module',
      'name' => 'flowplayer3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlowPlayer 3',
        'description' => 'Enables support for FlowPlayer 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'imagerotator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/imagerotator/imagerotator.module',
      'name' => 'imagerotator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Image Rotator 3',
        'description' => 'Enables support for JW Image Rotator 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'lutman' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/lutman/lutman.module',
      'name' => 'lutman',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Flash plugin',
        'description' => 'Enables support for the jQuery Flash plugin embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'onepixelout' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/onepixelout/onepixelout.module',
      'name' => 'onepixelout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => '1 Pixel Out',
        'description' => 'Enables support for the 1 Pixel Out MP3 player.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'simpleviewer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/simpleviewer/simpleviewer.module',
      'name' => 'simpleviewer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimpleViewer',
        'description' => 'Enables support for SimpleViewer.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swfobject' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/swfobject/swfobject.module',
      'name' => 'swfobject',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWFObject',
        'description' => 'Enables support for the SWFObject embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swfobject2' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/swfobject2/swfobject2.module',
      'name' => 'swfobject2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWFObject2',
        'description' => 'Enables support for the SWFObject 2 embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swftools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/swftools.module',
      'name' => 'swftools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWF Tools',
        'description' => 'This is the core component of SWF Tools and provides a common API for handling Adobe Flash related media.',
        'package' => 'SWF Tools',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'ufo' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/ufo/ufo.module',
      'name' => 'ufo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UFO',
        'description' => 'Enables support for the UFO embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'wijering' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/wijering/wijering.module',
      'name' => 'wijering',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Media Player 3',
        'description' => 'Enables support for JW Media Player 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'wijering4' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/swftools/wijering4/wijering4.module',
      'name' => 'wijering4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Media Player 4',
        'description' => 'Enables support for JW Media Player 4.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'tagadelic' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/tagadelic/tagadelic.module',
      'name' => 'tagadelic',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tagadelic',
        'description' => 'Tagadelic makes weighted tag clouds from your taxonomy terms.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'package' => 'Taxonomy',
        'version' => '6.x-1.2',
        'project' => 'tagadelic',
        'datestamp' => '1230725138',
        'php' => '4.3.5',
      ),
      'project' => 'tagadelic',
      'version' => '6.x-1.2',
    ),
    'taxonomy_redirect' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/taxonomy_redirect/taxonomy_redirect.module',
      'name' => 'taxonomy_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy redirect',
        'description' => 'Allows the admin to override where taxonomy term links go.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'taxonomy_redirect',
        'datestamp' => '1225348823',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_redirect',
      'version' => '6.x-1.3',
    ),
    'thickbox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/thickbox/thickbox.module',
      'name' => 'thickbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Thickbox',
        'description' => 'Enables Thickbox, a jQuery plugin.',
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'thickbox',
        'datestamp' => '1269039306',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'thickbox',
      'version' => '6.x-1.6',
    ),
    'tinymce' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/tinymce/tinymce.module',
      'name' => 'tinymce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TinyMCE',
        'description' => 'The most popular WYSIWYG editor for advanced content editing.',
        'core' => '6.x',
        'project' => 'tinymce',
        'datestamp' => '1206987314',
        'version' => '6.x-1.1-dev',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'tinymce',
      'version' => '6.x-1.1-dev',
    ),
    'ca' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/ca/ca.module',
      'name' => 'ca',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Conditional Actions',
        'description' => 'REQUIRED. Create conditional action configurations for taxes, shipping, and more!',
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_2checkout' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_2checkout/uc_2checkout.module',
      'name' => 'uc_2checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => '2Checkout',
        'description' => 'Enable to process payments using 2Checkout.com.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_authorizenet' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_authorizenet/uc_authorizenet.module',
      'name' => 'uc_authorizenet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Authorize.net',
        'description' => 'Process payments using Authorize.net. Supports AIM and ARB.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'test_gateway' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_credit/test_gateway.module',
      'name' => 'test_gateway',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test Gateway',
        'description' => 'Adds a credit card gateway that simulates a successful payment for testing checkout.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_credit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_credit/uc_credit.module',
      'name' => 'uc_credit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Credit Card',
        'description' => 'Receive credit card payments through checkout.',
        'dependencies' => 
        array (
          0 => 'uc_store',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
        'php' => '4.3.5',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_cybersource' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_cybersource/uc_cybersource.module',
      'name' => 'uc_cybersource',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CyberSource',
        'description' => 'Enable to process payments using CyberSource Silent Order POST.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_google_checkout' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_google_checkout/uc_google_checkout.module',
      'name' => 'uc_google_checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Checkout',
        'description' => 'Integrates Google\'s Checkout, Merchant Calculated Shipping, and Order Processing APIs.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_payment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_payment/uc_payment.module',
      'name' => 'uc_payment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment',
        'description' => 'Defines an API to let payment modules interact with the cart.',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'uc_order',
          2 => 'uc_store',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_payment_pack' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_payment_pack/uc_payment_pack.module',
      'name' => 'uc_payment_pack',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment Method Pack',
        'description' => 'Provides the check/money order, COD, and \'other\' payment methods.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_paypal' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/payment/uc_paypal/uc_paypal.module',
      'name' => 'uc_paypal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PayPal',
        'description' => 'Integrates various PayPal payment services and IPN feedback.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_flatrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/shipping/uc_flatrate/uc_flatrate.module',
      'name' => 'uc_flatrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flatrate',
        'description' => 'Assigns a flat shipping rate to products.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_quote' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/shipping/uc_quote/uc_quote.module',
      'name' => 'uc_quote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shipping Quotes',
        'description' => 'Retrieve and display quotes for shipping products.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'ca',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_shipping' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/shipping/uc_shipping/uc_shipping.module',
      'name' => 'uc_shipping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shipping',
        'description' => 'Gets products ready for physical shipment.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_ups' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/shipping/uc_ups/uc_ups.module',
      'name' => 'uc_ups',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UPS',
        'description' => 'Integration of UPS Rates and Services Selection and Shipping Online Tools with Drupal. See www.ups.com for details.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_usps' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/shipping/uc_usps/uc_usps.module',
      'name' => 'uc_usps',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'U.S. Postal Service',
        'description' => 'Integration of USPS Rate Calculator and Mail Service Standards Web Tools with Ubercart.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_weightquote' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/shipping/uc_weightquote/uc_weightquote.module',
      'name' => 'uc_weightquote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Weight quote',
        'description' => 'Assigns a shipping rate to products based on weight.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_attribute' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_attribute/uc_attribute.module',
      'name' => 'uc_attribute',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Attribute',
        'description' => 'Extends product content type to support product variations.  Allows customers to select these product attributes before purchase.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_cart' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_cart/uc_cart.module',
      'name' => 'uc_cart',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cart',
        'description' => 'REQUIRED. Controls the shopping cart for an Ubercart e-commerce site.',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'uc_order',
          2 => 'uc_product',
        ),
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_cart_links' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_cart_links/uc_cart_links.module',
      'name' => 'uc_cart_links',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cart Links',
        'description' => 'Create specialized links to purchase products from other nodes.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_catalog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_catalog/uc_catalog.module',
      'name' => 'uc_catalog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Catalog',
        'description' => 'Display a hierarchical product catalog page and block.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'taxonomy',
          2 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_file/uc_file.module',
      'name' => 'uc_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File Downloads',
        'description' => 'Allows products to be associated with downloadable files.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'uc_order',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_googleanalytics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_googleanalytics/uc_googleanalytics.module',
      'name' => 'uc_googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics for Ubercart',
        'description' => 'Adds e-commerce tracking for Ubercart to the Google Analytics module.',
        'dependencies' => 
        array (
          0 => 'googleanalytics',
          1 => 'uc_cart',
          2 => 'uc_order',
          3 => 'uc_store',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_order' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_order/uc_order.module',
      'name' => 'uc_order',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Order',
        'description' => 'REQUIRED. Receive and manage orders through your website.',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'token',
        ),
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_product' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_product/uc_product.module',
      'name' => 'uc_product',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product',
        'description' => 'REQUIRED. A module to represent items in an online store. Imagecache and CCK Image field recommended.',
        'dependencies' => 
        array (
          0 => 'uc_store',
        ),
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_product_kit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_product_kit/uc_product_kit.module',
      'name' => 'uc_product_kit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product Kit',
        'description' => 'This node module represents two or more products that have been listed together. This presents a logical and convenient grouping of items to the customer.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_reports' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_reports/uc_reports.module',
      'name' => 'uc_reports',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Reports',
        'description' => 'View reports about your store\'s sales, customers, and products.',
        'dependencies' => 
        array (
          0 => 'uc_order',
          1 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_roles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_roles/uc_roles.module',
      'name' => 'uc_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Roles',
        'description' => 'Assign permanent or expirable roles based on product purchases.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'uc_order',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_stock' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_stock/uc_stock.module',
      'name' => 'uc_stock',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stock',
        'description' => 'Manage stock levels of your Ubercart products',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'uc_product',
          2 => 'uc_reports',
          3 => 'uc_store',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_store' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_store/uc_store.module',
      'name' => 'uc_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Store',
        'description' => 'REQUIRED. Setup the store settings and manage your Ubercart site.',
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_taxes' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_taxes/uc_taxes.module',
      'name' => 'uc_taxes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxes',
        'description' => 'Define tax rates for customers\' geographic locations and products sold.',
        'dependencies' => 
        array (
          0 => 'uc_store',
          1 => 'uc_payment',
          2 => 'uc_product',
          3 => 'ca',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'uc_tax_report' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/ubercart/uc_tax_report/uc_tax_report.module',
      'name' => 'uc_tax_report',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tax Report',
        'description' => 'View a report about sales tax your customers paid.',
        'dependencies' => 
        array (
          0 => 'uc_reports',
          1 => 'uc_taxes',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.4',
        'project' => 'ubercart',
        'datestamp' => '1281551792',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.4',
    ),
    'vcard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/vcard_psm/vcard.module',
      'name' => 'vcard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'vCard_psm',
        'description' => 'Allows vcard export of user data. Modified by peterm',
        'dependencies' => 
        array (
          0 => 'profile',
        ),
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'vcard',
        'datestamp' => '1256119591',
        'php' => '4.3.5',
      ),
      'project' => 'vcard',
      'version' => '6.x-1.3',
    ),
    'viewfield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/viewfield/viewfield.module',
      'name' => 'viewfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Viewfield',
        'description' => 'Defines a field type that displays the contents of a view in a node.',
        'package' => 'CCK',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'content',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'viewfield',
        'datestamp' => '1282668110',
        'php' => '4.3.5',
      ),
      'project' => 'viewfield',
      'version' => '6.x-1.0',
    ),
    'views_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views/views_export/views_export.module',
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views exporter',
        'description' => 'Allows exporting multiple views at once.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'views_bonus_paged_feed' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_bonus/paged_feed/views_bonus_paged_feed.module',
      'name' => 'views_bonus_paged_feed',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bonus: Paged Feed',
        'description' => 'Like a feed display on it pages. How cool!',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'views_bonus',
        'datestamp' => '1276701909',
        'php' => '4.3.5',
      ),
      'project' => 'views_bonus',
      'version' => '6.x-1.1',
    ),
    'views_bonus_panels' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_bonus/panels/views_bonus_panels.module',
      'name' => 'views_bonus_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bonus: Panels',
        'description' => 'Various views style plugins to put views nodes in panels',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'panels',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'views_bonus',
        'datestamp' => '1276701909',
        'php' => '4.3.5',
      ),
      'project' => 'views_bonus',
      'version' => '6.x-1.1',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions',
        'description' => 'Integrates actions with the permission system.',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'views_bulk_operations',
        'datestamp' => '1286380267',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.10',
    ),
    'views_charts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_charts/views_charts.module',
      'name' => 'views_charts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Charts',
        'description' => 'Views Charts provides a new style for views: Charts.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'charts_graphs',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.0',
        'project' => 'views_charts',
        'datestamp' => '1279798811',
      ),
      'project' => 'views_charts',
      'version' => '6.x-1.0',
    ),
    'views_gallery' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_gallery/views_gallery.module',
      'name' => 'views_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Gallery',
        'description' => 'Add a Views image gallery to your website.',
        'core' => '6.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'imageapi',
          1 => 'imagecache',
          2 => 'imagefield',
          3 => 'content',
          4 => 'content_copy',
          5 => 'nodereference',
          6 => 'nodereference_url',
          7 => 'views',
          8 => 'views_attach',
          9 => 'token',
        ),
        'version' => '6.x-1.3',
        'project' => 'views_gallery',
        'datestamp' => '1275671414',
        'php' => '4.3.5',
      ),
      'project' => 'views_gallery',
      'version' => '6.x-1.3',
    ),
    'views_gallery_og' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_gallery/views_gallery_og.module',
      'name' => 'views_gallery_og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Gallery for Organic Groups',
        'description' => 'Add Views image galleries to Organic Groups.',
        'core' => '6.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views_gallery',
          1 => 'og',
          2 => 'og_views',
        ),
        'version' => '6.x-1.3',
        'project' => 'views_gallery',
        'datestamp' => '1275671414',
        'php' => '4.3.5',
      ),
      'project' => 'views_gallery',
      'version' => '6.x-1.3',
    ),
    'views_groupby' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_groupby/views_groupby.module',
      'name' => 'views_groupby',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views GroupBy',
        'description' => 'Support of SQL Grouping and Aggregation for Views2',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.0-rc2',
        'project' => 'views_groupby',
        'datestamp' => '1256331777',
      ),
      'project' => 'views_groupby',
      'version' => '6.x-1.0-rc2',
    ),
    'views_slideshow_singleframe' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_slideshow/contrib/views_slideshow_singleframe/views_slideshow_singleframe.module',
      'name' => 'views_slideshow_singleframe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: SingleFrame',
        'description' => 'Adds a Single Frame slideshow mode to Views Slideshows.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'views_slideshow',
        'datestamp' => '1279683019',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-2.3',
    ),
    'views_slideshow_thumbnailhover' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_slideshow/contrib/views_slideshow_thumbnailhover/views_slideshow_thumbnailhover.module',
      'name' => 'views_slideshow_thumbnailhover',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: ThumbnailHover',
        'description' => 'Adds a Thumbnail Hover slideshow mode to Views Slideshows.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'views_slideshow',
        'datestamp' => '1279683019',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-2.3',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'views_slideshow',
        'datestamp' => '1279683019',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-2.3',
    ),
    'views_slideshow_imageflow' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_slideshow_imageflow/views_slideshow_imageflow.module',
      'name' => 'views_slideshow_imageflow',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: Imageflow',
        'description' => 'Adds Imageflow functionality to Views Slideshows.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'views_slideshow_imageflow',
        'datestamp' => '1245446190',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow_imageflow',
      'version' => '6.x-1.0-beta1',
    ),
    'webform' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '6.x',
        'package' => 'Webform',
        'php' => '5.0',
        'version' => '6.x-3.6',
        'project' => 'webform',
        'datestamp' => '1294819899',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'webform',
      'version' => '6.x-3.6',
    ),
    'webform_validation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/webform_validation/webform_validation.module',
      'name' => 'webform_validation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform Validation',
        'description' => 'Add validation rules to webforms',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'webform',
        ),
        'package' => 'Webform',
        'version' => '6.x-1.3',
        'project' => 'webform_validation',
        'datestamp' => '1284206514',
        'php' => '4.3.5',
      ),
      'project' => 'webform_validation',
      'version' => '6.x-1.3',
    ),
    'zenophile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/zenophile/zenophile.module',
      'name' => 'zenophile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Zenophile',
        'description' => 'Quickly create Zen subthemes.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-2.0-beta2',
        'project' => 'zenophile',
        'datestamp' => '1254505650',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'zenophile',
      'version' => '6.x-2.0-beta2',
    ),
    'zenophile_midnight' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/zenophile/zenophile_midnight/zenophile_midnight.module',
      'name' => 'zenophile_midnight',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Zenophile Midnight',
        'description' => 'Aids in creating light-on-dark color schemes with Zenophile.',
        'package' => 'Development',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'zenophile',
        ),
        'version' => '6.x-2.0-beta2',
        'project' => 'zenophile',
        'datestamp' => '1254505650',
        'php' => '4.3.5',
      ),
      'project' => 'zenophile',
      'version' => '6.x-2.0-beta2',
    ),
    'auto_nodetitle' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/auto_nodetitle/auto_nodetitle.module',
      'name' => 'auto_nodetitle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Automatic Nodetitles',
        'description' => 'Allows hiding of the content title field and automatic title creation.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'auto_nodetitle',
        'datestamp' => '1249042505',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'auto_nodetitle',
      'version' => '6.x-1.2',
    ),
    'fieldgroup' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/fieldgroup/fieldgroup.module',
      'name' => 'fieldgroup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '9',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Create display groups for CCK fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'rules' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/rules/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'Lets you define conditionally executed actions based on occurring events.',
        'package' => 'Rules',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.3',
        'project' => 'rules',
        'datestamp' => '1283439108',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'rules',
      'version' => '6.x-1.3',
    ),
    'rules_forms' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/rules/rules_forms/rules_forms.module',
      'name' => 'rules_forms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Rules Forms support',
        'description' => 'Provides events, conditions and actions for rule-based form customization.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'rules',
        'datestamp' => '1283439108',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.3',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '6.x',
        'version' => '6.x-1.23',
        'project' => 'devel',
        'datestamp' => '1291650062',
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.23',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the boxes that are displayed around the main content.',
        'package' => 'Core - required',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows the user to change the color scheme of certain themes.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Handles the filtering of content in preparation for display.',
        'package' => 'Core - required',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core - required',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6055',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core - required',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core - optional',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.20',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core - required',
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'admin_menu',
        'datestamp' => '1283512306',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'admin_menu',
      'version' => '6.x-1.6',
    ),
    'advanced_help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/advanced_help/advanced_help.module',
      'name' => 'advanced_help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help',
        'description' => 'Allow advanced help and documentation.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'advanced_help',
        'datestamp' => '1238954409',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'advanced_help',
      'version' => '6.x-1.2',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '2005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'backup_migrate',
        'datestamp' => '1289012136',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'backup_migrate',
      'version' => '6.x-2.4',
    ),
    'browscap' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/browscap/browscap.module',
      'name' => 'browscap',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Browscap',
        'description' => 'Provides statistics on browsers and a replacement for PHPs get_browser() function.',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'browscap',
        'datestamp' => '1254331511',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'browscap',
      'version' => '6.x-1.1',
    ),
    'content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/content.module',
      'name' => 'content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content',
        'description' => 'Allows administrators to define new content types.',
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'content_copy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/content_copy/content_copy.module',
      'name' => 'content_copy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Copy',
        'description' => 'Enables ability to import/export field definitions.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'nodereference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/nodereference/nodereference.module',
      'name' => 'nodereference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'optionwidgets' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/optionwidgets/optionwidgets.module',
      'name' => 'optionwidgets',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Option Widgets',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/cck/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'content_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/content_taxonomy/content_taxonomy.module',
      'name' => 'content_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Taxonomy',
        'description' => 'Defines a field type for taxonomy terms',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'taxonomy',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.0-rc2',
        'project' => 'content_taxonomy',
        'datestamp' => '1250688034',
        'php' => '4.3.5',
      ),
      'project' => 'content_taxonomy',
      'version' => '6.x-1.0-rc2',
    ),
    'content_taxonomy_autocomplete' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/content_taxonomy/content_taxonomy_autocomplete.module',
      'name' => 'content_taxonomy_autocomplete',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Taxonomy Autocomplete',
        'description' => 'Defines a autocomplete widget type for content_taxonomy',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'content_taxonomy',
          2 => 'taxonomy',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.0-rc2',
        'project' => 'content_taxonomy',
        'datestamp' => '1250688034',
        'php' => '4.3.5',
      ),
      'project' => 'content_taxonomy',
      'version' => '6.x-1.0-rc2',
    ),
    'content_taxonomy_options' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/content_taxonomy/content_taxonomy_options.module',
      'name' => 'content_taxonomy_options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Taxonomy Options',
        'description' => 'Defines a option widget type for content_taxonomy for selects, radios/checkboxes',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'content_taxonomy',
          2 => 'taxonomy',
          3 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.0-rc2',
        'project' => 'content_taxonomy',
        'datestamp' => '1250688034',
        'php' => '4.3.5',
      ),
      'project' => 'content_taxonomy',
      'version' => '6.x-1.0-rc2',
    ),
    'date_api' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_timezone' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/date/date_timezone/date_timezone.module',
      'name' => 'date_timezone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '5200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Timezone',
        'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'filefield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/filefield/filefield.module',
      'name' => 'filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField',
        'description' => 'Defines a file field type.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.9',
        'project' => 'filefield',
        'datestamp' => '1292197563',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.9',
    ),
    'imageapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imageapi/imageapi.module',
      'name' => 'imageapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI',
        'description' => 'ImageAPI supporting multiple toolkits.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.9',
        'project' => 'imageapi',
        'datestamp' => '1287340884',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.9',
    ),
    'imageapi_gd' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imageapi/imageapi_gd.module',
      'name' => 'imageapi_gd',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI GD2',
        'description' => 'Uses PHP\'s built-in GD2 image processing support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'imageapi',
        'datestamp' => '1287340884',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.9',
    ),
    'imagecache' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imagecache/imagecache.module',
      'name' => 'imagecache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache',
        'description' => 'Dynamic image manipulator and cache.',
        'package' => 'ImageCache',
        'dependencies' => 
        array (
          0 => 'imageapi',
        ),
        'core' => '6.x',
        'version' => '6.x-2.0-beta10',
        'project' => 'imagecache',
        'datestamp' => '1250716281',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta10',
    ),
    'imagecache_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imagecache/imagecache_ui.module',
      'name' => 'imagecache_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache UI',
        'description' => 'ImageCache User Interface.',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-2.0-beta10',
        'project' => 'imagecache',
        'datestamp' => '1250716281',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta10',
    ),
    'imagefield' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imagefield/imagefield.module',
      'name' => 'imagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageField',
        'description' => 'Defines an image field type.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
        ),
        'package' => 'CCK',
        'version' => '6.x-3.9',
        'project' => 'imagefield',
        'datestamp' => '1292197241',
        'php' => '4.3.5',
      ),
      'project' => 'imagefield',
      'version' => '6.x-3.9',
    ),
    'imce' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'imce',
        'datestamp' => '1293481277',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imce',
      'version' => '6.x-2.1',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '6.x-1.1',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1268433606',
        'php' => '4.3.5',
      ),
      'project' => 'imce_wysiwyg',
      'version' => '6.x-1.1',
    ),
    'jq_bridge' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/jq/contributions/jq_bridge/jq_bridge.module',
      'name' => 'jq_bridge',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQ Bridge',
        'description' => 'Adds jQ support to several jQuery wrapper modules, including jCarousel.',
        'dependencies' => 
        array (
          0 => 'jq',
        ),
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'jq',
        'datestamp' => '1223316027',
        'php' => '4.3.5',
      ),
      'project' => 'jq',
      'version' => '6.x-1.2',
    ),
    'jq' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/jq/jq.module',
      'name' => 'jq',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQ',
        'description' => 'Allows modules to register jQuery plugins with a central repository.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'jq',
        'datestamp' => '1223316027',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jq',
      'version' => '6.x-1.2',
    ),
    'jquery_media' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/jquery_media/jquery_media.module',
      'name' => 'jquery_media',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '4',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Media',
        'description' => 'Wrapper for the jQuery Media plugin, embedding virtually any media.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.4-beta1',
        'project' => 'jquery_media',
        'datestamp' => '1219888515',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_media',
      'version' => '6.x-1.4-beta1',
    ),
    'jquery_plugin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/jquery_plugin/jquery_plugin.module',
      'name' => 'jquery_plugin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery plugins',
        'description' => 'An API and home for miscellaneous jQuery plugins.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'jquery_plugin',
        'datestamp' => '1245106879',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_plugin',
      'version' => '6.x-1.10',
    ),
    'link' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'link',
        'datestamp' => '1276539609',
        'php' => '4.3.5',
      ),
      'project' => 'link',
      'version' => '6.x-2.9',
    ),
    'nodereference_url' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/nodereference_url/nodereference_url.module',
      'name' => 'nodereference_url',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference URL Widget',
        'description' => 'Adds an additional widget to the CCK Node Reference field that prepopulates a reference by the URL.',
        'dependencies' => 
        array (
          0 => 'nodereference',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'nodereference_url',
        'datestamp' => '1270624508',
        'php' => '4.3.5',
      ),
      'project' => 'nodereference_url',
      'version' => '6.x-1.6',
    ),
    'resizable_body' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/resizable_body/resizable_body.module',
      'name' => 'resizable_body',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Resizable Body and Comments',
        'description' => 'Change the cols, rows for body and comment field as well as a few other visual adjustments.',
        'package' => 'Resizable Fields',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'resizable_body',
        'datestamp' => '1239605780',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'resizable_body',
      'version' => '6.x-2.0',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'views_attach' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_attach/views_attach.module',
      'name' => 'views_attach',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views attach',
        'description' => 'Provides new Views display types that can be attached to nodes or users.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'suggests' => 
        array (
          0 => 'token',
        ),
        'package' => 'Views',
        'version' => '6.x-2.2',
        'project' => 'views_attach',
        'datestamp' => '1255040204',
        'php' => '4.3.5',
      ),
      'project' => 'views_attach',
      'version' => '6.x-2.2',
    ),
    'views_bonus_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_bonus/export/views_bonus_export.module',
      'name' => 'views_bonus_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bonus: Views Export',
        'description' => 'Plugin to export views a couple of formats including Comma Separated Values(CSV), Doc or XML',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'views_bonus',
        'datestamp' => '1276701909',
        'php' => '4.3.5',
      ),
      'project' => 'views_bonus',
      'version' => '6.x-1.1',
    ),
    'views_bonus_spy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_bonus/views_spy/views_bonus_spy.module',
      'name' => 'views_bonus_spy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bonus: Views Spy',
        'description' => 'Provides an jQuery spy views display plugin.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-1.0',
        'project' => 'views_bonus',
        'datestamp' => '1262994608',
        'php' => '4.3.5',
      ),
      'project' => 'views_bonus',
      'version' => '6.x-1.0',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Exposes new Views style \'Bulk Operations\' for selecting multiple nodes and applying operations on them.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.10',
        'project' => 'views_bulk_operations',
        'datestamp' => '1286380267',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.10',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows users to edit contents with client-side editors.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'wysiwyg',
        'datestamp' => '1296430415',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg',
      'version' => '6.x-2.3',
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '7',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '6.x',
        'recommends' => 
        array (
          0 => 'path_redirect',
        ),
        'version' => '6.x-1.5',
        'project' => 'pathauto',
        'datestamp' => '1286469664',
        'php' => '4.3.5',
      ),
      'project' => 'pathauto',
      'version' => '6.x-1.5',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6009',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'vertical_tabs' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/sites/all/modules/vertical_tabs/vertical_tabs.module',
      'name' => 'vertical_tabs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '300',
      'info' => 
      array (
        'name' => 'Vertical Tabs',
        'description' => 'Provides vertical tabs for supported forms like the node edit page.',
        'core' => '6.x',
        'package' => 'User interface',
        'recommends' => 
        array (
          0 => 'form',
        ),
        'version' => '6.x-1.0-rc1',
        'project' => 'vertical_tabs',
        'datestamp' => '1265224223',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'vertical_tabs',
      'version' => '6.x-1.0-rc1',
    ),
  ),
  'themes' => 
  array (
    'bluemarine' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/themes/bluemarine/bluemarine.info',
      'name' => 'bluemarine',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bluemarine',
        'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
        'version' => '6.20',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'chameleon' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/themes/chameleon/chameleon.info',
      'name' => 'chameleon',
      'type' => 'theme',
      'owner' => 'themes/chameleon/chameleon.theme',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chameleon',
        'description' => 'Minimalist tabled theme with light colors.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'favicon',
          2 => 'name',
          3 => 'slogan',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
            1 => 'common.css',
          ),
        ),
        'version' => '6.20',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.20',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'marvin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/themes/chameleon/marvin/marvin.info',
      'name' => 'marvin',
      'type' => 'theme',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Marvin',
        'description' => 'Boxy tabled theme in all grays.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'version' => '6.20',
        'core' => '6.x',
        'base theme' => 'chameleon',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
    'pushbutton' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-6.x/themes/pushbutton/pushbutton.info',
      'name' => 'pushbutton',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pushbutton',
        'description' => 'Tabled, multi-column theme in blue and orange tones.',
        'version' => '6.20',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1292447788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.20',
    ),
  ),
);
$options['site_url'] = 'maps-dev.ucsc.edu';
$options['site_id'] = '448';
$options['client_email'] = 'peterm@ucsc.edu';
$options['redirection'] = false;
$options['ssl'] = '0';
$options['profile'] = 'default';
$options['language'] = 'en';
$options['site_ip_addresses'] = array (
  '@server_master' => '128.114.205.73',
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

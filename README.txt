# Auto Save Form

This module automatically stores and recovers form values to prevent 
losing data when editing an form.

The plugin listens for the form change and keyup events and then stores 
the values of your form controls (select, input, and textarea) in the local 
storage and automatically clears the storage on form submit.

## Installation
1) Copy all contents of this package to your modules directory preserving
   subdirectory structure.

2) Go to Administer -> Modules to install module. If the (Drupal core) Field UI
   module is not enabled, do so.

## Configuration
1) Goto /admin/config/auto_save_form/autosaveformsid of your drupal installation
   enter comma separated drupal form ids. 

## Maintainer
Rajveer singh <rajveer.gang@gmail.com>
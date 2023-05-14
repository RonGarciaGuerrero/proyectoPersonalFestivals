/**
 * @file
 * Custom Code of the javascript behaviour.
 */

(function ($, Drupal, once) {
  Drupal.behaviors.proyectopersonalBehavior = {
    attach: function (context, settings) {

      once('proyectopersonalBehavior', 'html', context).forEach(function (element) {
        // Apply the proyectopersonalBehaviour effect to the elements only once.
      });

    }
  };
})(jQuery, Drupal, once);

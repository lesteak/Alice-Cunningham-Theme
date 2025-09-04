// Import Alert
import Alert from './modules/alert';

// Menu
import Menu from './modules/menu';

// Import Font loader
import WebFont from 'webfontloader';

import Masonry from 'masonry-layout'

export default {
  init () {
    // JavaScript to be fired on all pages

    // Load Fonts
    WebFont.load({
      classes: false,
      events: false,
      google: {
        families: ['EB+Garamond:wght@300;400;600;700'],
        display: 'swap',
        version: 2,
      },
    });

    // Alert
    if (document.getElementById('tofino-notification')) {
      Alert();
    }

    // Menu
    if (document.getElementById('menu-primary')) {
      Menu();
    }
  },
  finalize () {
    if (document.getElementById('masonry-grid')) {
      var elem = document.getElementById('masonry-grid');
      // JavaScript to be fired after init
      var msnry = new Masonry(elem, {
        // options
        itemSelector: '.masonry-item',
      });
    }

    console.log(msnry);
  },
  loaded () {
    // Javascript to be fired once fully loaded
  },
};

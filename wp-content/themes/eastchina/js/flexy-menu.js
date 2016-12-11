jQuery['fn']['flexymenu'] = function (_0x99dfx1) {
    var _0x99dfx2 = {
        speed: 300,
        type: 'horizontal',
        align: 'left',
        indicator: false,
        hideClickOut: true
    };
    jQuery['extend'](_0x99dfx2, _0x99dfx1);
    var _0x99dfx3 = false;
    var _0x99dfx4 = jQuery(this);
    var _0x99dfx5 = window['innerWidth'];
    if (_0x99dfx2['type'] == 'vertical') {
        jQuery(_0x99dfx4)['addClass']('vertical');
        if (_0x99dfx2['align'] == 'right') {
            jQuery(_0x99dfx4)['addClass']('right');
        }
    }
    if (_0x99dfx2['indicator'] == true) {
        jQuery(_0x99dfx4)['find']('li')['each'](function () {
            if (jQuery(this)['children']('ul')['length'] > 0) {
                jQuery(this)['append']('<span class=\'indicator\'>+</span>');
            }
        });
    }
    jQuery(_0x99dfx4)['prepend']('<li class=\'showhide\'><span class=\'title\'></span><span class=\'icon\'><em></em><em></em><em></em><em></em></span></li>');
    _0x99dfx6();
    jQuery(window)['resize'](function () {
        if (_0x99dfx5 <= 768 && window['innerWidth'] > 768) {
            _0x99dfx10();
            _0x99dfxc();
            _0x99dfx7();
            if (_0x99dfx2['type'] == 'horizontal' && _0x99dfx2['align'] == 'right' && _0x99dfx3 == false) {
                _0x99dfxd();
                _0x99dfx3 = true;
            }
        }
        if (_0x99dfx5 > 768 && window['innerWidth'] <= 768) {
            _0x99dfx10();
            _0x99dfxb();
            _0x99dfxa();
            if (_0x99dfx3 == true) {
                _0x99dfxd();
                _0x99dfx3 = false;
            }
        }
        _0x99dfx5 = window['innerWidth'];
    });

    function _0x99dfx6() {
        if (window['innerWidth'] <= 768) {
            _0x99dfxb();
            _0x99dfxa();
            if (_0x99dfx3 == true) {
                _0x99dfxd();
                _0x99dfx3 = false;
            }
        } else {
            _0x99dfxc();
            _0x99dfx7();
            if (_0x99dfx2['type'] == 'horizontal' && _0x99dfx2['align'] == 'right' && _0x99dfx3 == false) {
                _0x99dfxd();
                _0x99dfx3 = true;
            }
        }
    }

    function _0x99dfx7() {
        if (navigator['userAgent']['match'](/Mobi/i) || window['navigator']['msMaxTouchPoints'] > 0) {
            jQuery(_0x99dfx4)['find']('a')['on']('click touchstart', function (_0x99dfx8) {
                _0x99dfx8['stopPropagation']();
                _0x99dfx8['preventDefault']();
                window['location']['href'] = jQuery(this)['attr']('href');
                jQuery(this)['parent']('li')['siblings']('li')['find']('ul')['stop'](true, true)['fadeOut'](_0x99dfx2['speed']);
                if (jQuery(this)['siblings']('ul')['css']('display') == 'none') {
                    jQuery(this)['siblings']('ul')['stop'](true, true)['fadeIn'](_0x99dfx2['speed']);
                } else {
                    jQuery(this)['siblings']('ul')['stop'](true, true)['fadeOut'](_0x99dfx2['speed']);
                    jQuery(this)['siblings']('ul')['find']('ul')['stop'](true, true)['fadeOut'](_0x99dfx2['speed']);
                }
            });
            if (_0x99dfx2['hideClickOut'] == true) {
                jQuery(document)['bind']('click.menu touchstart.menu', function (_0x99dfx9) {
                    if (jQuery(_0x99dfx9['target'])['closest'](_0x99dfx4)['length'] == 0) {
                        jQuery(_0x99dfx4)['find']('ul')['fadeOut'](_0x99dfx2['speed']);
                    }
                });
            }
        } else {
            jQuery(_0x99dfx4)['find']('li')['bind']('mouseenter', function () {
                jQuery(this)['children']('ul')['stop'](true, true)['fadeIn'](_0x99dfx2['speed']);
            })['bind']('mouseleave', function () {
                jQuery(this)['children']('ul')['stop'](true, true)['fadeOut'](_0x99dfx2['speed']);
            });
        }
    }

    function _0x99dfxa() {
        jQuery(_0x99dfx4)['find']('li:not(.showhide)')['each'](function () {
            if (jQuery(this)['children']('ul')['length'] > 0) {
                jQuery(this)['children']('a')['on']('click', function () {
                    if (jQuery(this)['siblings']('ul')['css']('display') == 'none') {
                        jQuery(this)['siblings']('ul')['slideDown'](_0x99dfx2['speed']);
                    } else {
                        jQuery(this)['siblings']('ul')['slideUp'](_0x99dfx2['speed']);
                    }
                });
            }
        });
    }

    function _0x99dfxb() {
        jQuery(_0x99dfx4)['children']('li:not(.showhide)')['hide'](0);
        jQuery(_0x99dfx4)['children']('li.showhide')['show'](0)['bind']('click', function () {
            if (jQuery(_0x99dfx4)['children']('li')['is'](':hidden')) {
                jQuery(_0x99dfx4)['children']('li')['slideDown'](_0x99dfx2['speed']);
            } else {
                jQuery(_0x99dfx4)['children']('li:not(.showhide)')['slideUp'](_0x99dfx2['speed']);
                jQuery(_0x99dfx4)['children']('li.showhide')['show'](0);
            }
        });
    }

    function _0x99dfxc() {
        jQuery(_0x99dfx4)['children']('li')['show'](0);
        jQuery(_0x99dfx4)['children']('li.showhide')['hide'](0);
    }

    function _0x99dfxd() {
        jQuery(_0x99dfx4)['children']('li')['addClass']('right');
        var _0x99dfxe = jQuery(_0x99dfx4)['children']('li');
        jQuery(_0x99dfx4)['children']('li:not(.showhide)')['detach']();
        for (var _0x99dfxf = _0x99dfxe['length']; _0x99dfxf >= 1; _0x99dfxf--) {
            jQuery(_0x99dfx4)['append'](_0x99dfxe[_0x99dfxf]);
        }
    }

    function _0x99dfx10() {
        jQuery(_0x99dfx4)['find']('li, a')['unbind']();
        jQuery(document)['unbind']('click.menu touchstart.menu');
        jQuery(_0x99dfx4)['find']('ul')['hide'](0);
    }
};
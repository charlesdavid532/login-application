$(function () {
    /**
    * Main view of the Jquery image gallery. Mainly appends and destroys the big image apart from binding various events
    * @class JqueryImageGalleryView
    * @constructor
    * @public
    */
    var JqueryImageGalleryView = (function () {
        return {
            
            /**
            * Renders the view. Should be main entry point Can be replaced by a constructorhttp://localhost:59845/jquery-pull-menu
            * @method render
            * @public
            */
            render: function render() {
                this._bindEvents();
            },
            /**
            * Binds the events on the main images (Not the big image)
            * @method _bindEvents
            * @private
            */
            _bindEvents: function _bindEvents() {
                $('.login-button').on('click', $.proxy(this._onLoginButtonClick, this));
            },
            /**
            * Handles the mouse click event of the login button
            * @method _onLoginButtonClick
            * @param event{Object} The event object
            * @private
            */
            _onLoginButtonClick: function _onLoginButtonClick(event) {
                //alert(window.location);
                window.location.href = window.location + 'login.php';
            }
            
        }
    })();
    JqueryImageGalleryView.render();
});
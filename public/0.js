(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/policies.js":
/*!**********************************!*\
  !*** ./resources/js/policies.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
  modify: function modify(user, model) {
    return user.id === model.user_id;
  },
  accept: function accept(user, answer) {
    return user.id === answer.question.user_id;
  }
});

/***/ })

}]);
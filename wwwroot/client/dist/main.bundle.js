/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 15);
/******/ })
/************************************************************************/
/******/ ({

/***/ 15:
/*!******************************!*\
  !*** ./client/src/index.jsx ***!
  \******************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed: SyntaxError: Unexpected token, expected , (19:28)\\n\\n\\u001b[0m \\u001b[90m 17 | \\u001b[39m  \\u001b[33mComponentDidMount\\u001b[39m() {\\n \\u001b[90m 18 | \\u001b[39m    $\\u001b[33m.\\u001b[39majax({\\n\\u001b[31m\\u001b[1m>\\u001b[22m\\u001b[39m\\u001b[90m 19 | \\u001b[39m      url\\u001b[33m:\\u001b[39m \\u001b[32m'/items/read.php'\\u001b[39m)\\u001b[33m,\\u001b[39m\\n \\u001b[90m    | \\u001b[39m                            \\u001b[31m\\u001b[1m^\\u001b[22m\\u001b[39m\\n \\u001b[90m 20 | \\u001b[39m      method\\u001b[33m:\\u001b[39m \\u001b[32m'GET'\\u001b[39m\\u001b[33m,\\u001b[39m\\n \\u001b[90m 21 | \\u001b[39m      success\\u001b[33m:\\u001b[39m (data) \\u001b[33m=>\\u001b[39m {\\n \\u001b[90m 22 | \\u001b[39m        console\\u001b[33m.\\u001b[39mlog(data)\\u001b[33m;\\u001b[39m\\u001b[0m\\n\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMTUuanMiLCJzb3VyY2VzIjpbXSwibWFwcGluZ3MiOiIiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///15\n");

/***/ })

/******/ });
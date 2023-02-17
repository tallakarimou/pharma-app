/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/sale.js":
/*!******************************!*\
  !*** ./resources/js/sale.js ***!
  \******************************/
/***/ (() => {

eval("$(document).ready(function () {\n  var row_number = 1;\n  $(\"#add_row\").click(function (e) {\n    e.preventDefault();\n    var new_row_number = row_number - 1;\n    $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');\n    $('#products_table').append('<tr id=\"product' + (row_number + 1) + '\"></tr>');\n    row_number++;\n  });\n  $(\"#delete_row\").click(function (e) {\n    e.preventDefault();\n    if (row_number > 1) {\n      $(\"#product\" + (row_number - 1)).html('');\n      row_number--;\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2FsZS5qcy5qcyIsIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwicm93X251bWJlciIsImNsaWNrIiwiZSIsInByZXZlbnREZWZhdWx0IiwibmV3X3Jvd19udW1iZXIiLCJodG1sIiwiZmluZCIsImFwcGVuZCJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3NhbGUuanM/Y2FjMiJdLCJzb3VyY2VzQ29udGVudCI6WyJcbiAgICAgICAgICAgICAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xuICAgICAgICAgICAgICAgICAgICBsZXQgcm93X251bWJlciA9IDE7XG4gICAgICAgICAgICAgICAgICAgICQoXCIjYWRkX3Jvd1wiKS5jbGljayhmdW5jdGlvbihlKXtcbiAgICAgICAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgICAgICAgbGV0IG5ld19yb3dfbnVtYmVyID0gcm93X251bWJlciAtIDE7XG4gICAgICAgICAgICAgICAgICAgICAgJCgnI3Byb2R1Y3QnICsgcm93X251bWJlcikuaHRtbCgkKCcjcHJvZHVjdCcgKyBuZXdfcm93X251bWJlcikuaHRtbCgpKS5maW5kKCd0ZDpmaXJzdC1jaGlsZCcpO1xuICAgICAgICAgICAgICAgICAgICAgICQoJyNwcm9kdWN0c190YWJsZScpLmFwcGVuZCgnPHRyIGlkPVwicHJvZHVjdCcgKyAocm93X251bWJlciArIDEpICsgJ1wiPjwvdHI+Jyk7XG4gICAgICAgICAgICAgICAgICAgICAgcm93X251bWJlcisrO1xuICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICAkKFwiI2RlbGV0ZV9yb3dcIikuY2xpY2soZnVuY3Rpb24oZSl7XG4gICAgICAgICAgICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICAgICAgICAgICAgICAgIGlmKHJvd19udW1iZXIgPiAxKXtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoXCIjcHJvZHVjdFwiICsgKHJvd19udW1iZXIgLSAxKSkuaHRtbCgnJyk7XG4gICAgICAgICAgICAgICAgICAgICAgICByb3dfbnVtYmVyLS07XG4gICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgIH0pO1xuXG4iXSwibWFwcGluZ3MiOiJBQUNnQkEsQ0FBQyxDQUFDQyxRQUFRLENBQUMsQ0FBQ0MsS0FBSyxDQUFDLFlBQVU7RUFDeEIsSUFBSUMsVUFBVSxHQUFHLENBQUM7RUFDbEJILENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQ0ksS0FBSyxDQUFDLFVBQVNDLENBQUMsRUFBQztJQUM3QkEsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7SUFDbEIsSUFBSUMsY0FBYyxHQUFHSixVQUFVLEdBQUcsQ0FBQztJQUNuQ0gsQ0FBQyxDQUFDLFVBQVUsR0FBR0csVUFBVSxDQUFDLENBQUNLLElBQUksQ0FBQ1IsQ0FBQyxDQUFDLFVBQVUsR0FBR08sY0FBYyxDQUFDLENBQUNDLElBQUksRUFBRSxDQUFDLENBQUNDLElBQUksQ0FBQyxnQkFBZ0IsQ0FBQztJQUM3RlQsQ0FBQyxDQUFDLGlCQUFpQixDQUFDLENBQUNVLE1BQU0sQ0FBQyxpQkFBaUIsSUFBSVAsVUFBVSxHQUFHLENBQUMsQ0FBQyxHQUFHLFNBQVMsQ0FBQztJQUM3RUEsVUFBVSxFQUFFO0VBQ2QsQ0FBQyxDQUFDO0VBRUZILENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ0ksS0FBSyxDQUFDLFVBQVNDLENBQUMsRUFBQztJQUNoQ0EsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7SUFDbEIsSUFBR0gsVUFBVSxHQUFHLENBQUMsRUFBQztNQUNoQkgsQ0FBQyxDQUFDLFVBQVUsSUFBSUcsVUFBVSxHQUFHLENBQUMsQ0FBQyxDQUFDLENBQUNLLElBQUksQ0FBQyxFQUFFLENBQUM7TUFDekNMLFVBQVUsRUFBRTtJQUNkO0VBQ0YsQ0FBQyxDQUFDO0FBQ0osQ0FBQyxDQUFDIn0=\n//# sourceURL=webpack-internal:///./resources/js/sale.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/sale.js"]();
/******/ 	
/******/ })()
;
'use strict';

define(function () {
  // Chinese (Simplified)
  return {
    errorLoading: function errorLoading() {
      return '无法载入结果。';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = '请删除' + overChars + '个字符';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = '请再输入至少' + remainingChars + '个字符';

      return message;
    },
    loadingMore: function loadingMore() {
      return '载入更多结果…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = '最多只能选择' + args.maximum + '个项目';

      return message;
    },
    noResults: function noResults() {
      return '未找到结果';
    },
    searching: function searching() {
      return '搜索中…';
    }
  };
});
//# sourceMappingURL=zh-CN.js.map
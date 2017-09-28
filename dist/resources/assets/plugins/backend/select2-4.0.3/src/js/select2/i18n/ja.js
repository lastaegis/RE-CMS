'use strict';

define(function () {
  // Japanese
  return {
    errorLoading: function errorLoading() {
      return '結果が読み込まれませんでした';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = overChars + ' 文字を削除してください';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = '少なくとも ' + remainingChars + ' 文字を入力してください';

      return message;
    },
    loadingMore: function loadingMore() {
      return '読み込み中…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = args.maximum + ' 件しか選択できません';

      return message;
    },
    noResults: function noResults() {
      return '対象が見つかりません';
    },
    searching: function searching() {
      return '検索しています…';
    }
  };
});
//# sourceMappingURL=ja.js.map
'use strict';

define(function () {
  // Vietnamese
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vui lòng nhập ít hơn ' + overChars + ' ký tự';

      if (overChars != 1) {
        message += 's';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vui lòng nhập nhiều hơn ' + remainingChars + ' ký tự"';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Đang lấy thêm kết quả…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Chỉ có thể chọn được ' + args.maximum + ' lựa chọn';

      return message;
    },
    noResults: function noResults() {
      return 'Không tìm thấy kết quả';
    },
    searching: function searching() {
      return 'Đang tìm…';
    }
  };
});
//# sourceMappingURL=vi.js.map
'use strict';

define(function () {
  // Thai
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'โปรดลบออก ' + overChars + ' ตัวอักษร';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'โปรดพิมพ์เพิ่มอีก ' + remainingChars + ' ตัวอักษร';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'กำลังค้นข้อมูลเพิ่ม…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'คุณสามารถเลือกได้ไม่เกิน ' + args.maximum + ' รายการ';

      return message;
    },
    noResults: function noResults() {
      return 'ไม่พบข้อมูล';
    },
    searching: function searching() {
      return 'กำลังค้นข้อมูล…';
    }
  };
});
//# sourceMappingURL=th.js.map
'use strict';

define(function () {
  // Czech
  function small(count, masc) {
    switch (count) {
      case 2:
        return masc ? 'dva' : 'dvě';
      case 3:
        return 'tři';
      case 4:
        return 'čtyři';
    }
    return '';
  }
  return {
    errorLoading: function errorLoading() {
      return 'Výsledky nemohly být načteny.';
    },
    inputTooLong: function inputTooLong(args) {
      var n = args.input.length - args.maximum;

      if (n == 1) {
        return 'Prosím zadejte o jeden znak méně';
      } else if (n <= 4) {
        return 'Prosím zadejte o ' + small(n, true) + ' znaky méně';
      } else {
        return 'Prosím zadejte o ' + n + ' znaků méně';
      }
    },
    inputTooShort: function inputTooShort(args) {
      var n = args.minimum - args.input.length;

      if (n == 1) {
        return 'Prosím zadejte ještě jeden znak';
      } else if (n <= 4) {
        return 'Prosím zadejte ještě další ' + small(n, true) + ' znaky';
      } else {
        return 'Prosím zadejte ještě dalších ' + n + ' znaků';
      }
    },
    loadingMore: function loadingMore() {
      return 'Načítají se další výsledky…';
    },
    maximumSelected: function maximumSelected(args) {
      var n = args.maximum;

      if (n == 1) {
        return 'Můžete zvolit jen jednu položku';
      } else if (n <= 4) {
        return 'Můžete zvolit maximálně ' + small(n, false) + ' položky';
      } else {
        return 'Můžete zvolit maximálně ' + n + ' položek';
      }
    },
    noResults: function noResults() {
      return 'Nenalezeny žádné položky';
    },
    searching: function searching() {
      return 'Vyhledávání…';
    }
  };
});
//# sourceMappingURL=cs.js.map
'use strict';

/**
 * This file builds the content of the website from the README.md
 */

var fs = require('fs');

var readmePath = 'README.md';
var indexTemplatePath = 'website/_includes/index.template.md';
var indexPath = 'website/index.md';

var readmeData = fs.readFileSync(readmePath, "utf8");
var indexData = fs.readFileSync(indexTemplatePath, "utf8");

var sections = ['Installation', 'Usage', 'Configuration', 'Events', 'Tips', 'Compatibility'];

var codeBlockRegExp = /^```(\w+)$([^]*?)```/gm;

var generatedContent = '';

// Add all relevant sections from the README
var _iteratorNormalCompletion = true;
var _didIteratorError = false;
var _iteratorError = undefined;

try {
  for (var _iterator = sections[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
    var section = _step.value;

    var sectionRegExp = new RegExp('(^# ' + section + '$[^]*?)^# ', 'gm');
    var sectionContent = sectionRegExp.exec(readmeData)[1];
    sectionContent = sectionContent.replace(codeBlockRegExp, '{% highlight $1 %}$2{% endhighlight %}');
    generatedContent += '<section markdown="1">\n' + sectionContent + '\n</section>\n\n';
  }
} catch (err) {
  _didIteratorError = true;
  _iteratorError = err;
} finally {
  try {
    if (!_iteratorNormalCompletion && _iterator.return) {
      _iterator.return();
    }
  } finally {
    if (_didIteratorError) {
      throw _iteratorError;
    }
  }
}

generatedContent = generatedContent.replace('[List of configuration options](http://www.dropzonejs.com/#configuration-options)', '{% include configuration-options.html %}').replace('[List of events](http://www.dropzonejs.com/#event-list)', '{% include event-list.html %}');

fs.writeFileSync(indexPath, indexData.replace('{{ generated_readme_content }}', generatedContent));

console.log("Successfully built index.md for website.");
//# sourceMappingURL=build_site_from_readme.js.map
'use strict';

/**
 * This file builds the configuration documentation for the website, from the actual source file
 */

var fs = require('fs');
var marked = require('marked');

var srcFile = 'website/_includes/configuration-options.template.html';
var dstFile = 'website/_includes/configuration-options.html';

var fileData = fs.readFileSync(srcFile, "utf8");
var data = fs.readFileSync('src/dropzone.coffee', "utf8");
var dataLines = data.split("\n");

// Get the content between `defaultOptions:` and `# END OPTIONS`
var configBlockRegExp = /defaultOptions:([^]*?)# END OPTIONS/g;
var configBlock = configBlockRegExp.exec(data)[1];

var singleConfigRegExp = /((^\s*#.*$\n)+)^\s*(\w+)\s*:\s*(.*)/gm;

var docLineRegExp = /^\s*#(.*)$/gm;
var functionRegExp = /(\(.*\))?\s*-\>/;

var htmlDoc = '';

var configCount = 0;

// Used to add a separator line
var firstDict = true;
var firstFunction = true;

while ((matchResult = singleConfigRegExp.exec(configBlock)) !== null) {
  var rawDoc = '';
  // Get each line of doc
  while ((docMatchResult = docLineRegExp.exec(matchResult[1])) !== null) {
    var docLine = docMatchResult[1];
    // Strip the first space of each docline
    if (docLine.charAt(0) === ' ') docLine = docLine.substr(1);
    rawDoc += docLine + '\n';
  }

  var varName = matchResult[3];
  var defaultValue = matchResult[4];

  if (varName.indexOf('dict') === 0) {
    if (firstDict) {
      htmlDoc += '<tr>\n        <td class="separator" colspan="2">to translate dropzone, you can provide these options:</td>\n      </tr>';
      firstDict = false;
    }
    rawDoc = '`' + defaultValue + '`<br>' + rawDoc;
    defaultValue = 'see description';
  } else if (functionRegExp.test(defaultValue)) {
    if (firstFunction) {
      htmlDoc += '<tr>\n        <td class="separator" colspan="2">functions you can override to change or extend default behavior:</td>\n      </tr>';
      firstFunction = false;
    }
    defaultValue = defaultValue === '-> noop' ? 'empty Function' : 'function';
  } else if (defaultValue === '"""') {
    defaultValue = 'HTML template';
  }

  var doc = marked(rawDoc);

  doc = doc.replace(/{{/g, '{% raw %}{{{% endraw %}').replace(/}}/g, '{% raw %}}}{% endraw %}');

  htmlDoc += '\n    <tr id="config-' + varName + '">\n      <td class="label">\n        <a href="#config-' + varName + '"><code>' + varName + '</code></a>\n        <a title="See source code"\n           target="_blank"\n           href="https://gitlab.com/meno/dropzone/blob/master/src/dropzone.coffee#L' + getLine(varName) + '"\n           class="default-value"><code>default: ' + defaultValue + '</code></a>\n      </td>\n      <td class="value">\n        ' + doc + '\n      </td>\n    </tr>';

  configCount++;
}

fs.writeFileSync(dstFile, fileData.replace('<!-- options -->', htmlDoc));

console.log('Success! Created config for ' + configCount + ' options and wrote to "' + dstFile + '"');

/**
 * Returns the line for given config
 */
function getLine(config) {
  for (var i = 0; i < dataLines.length; i++) {
    if (new RegExp('^\\s*' + config + '\\:').test(dataLines[i])) {
      return i + 1;
    }
  }
  console.log("Warning: line not found");
}
//# sourceMappingURL=build_configuration_doc.js.map
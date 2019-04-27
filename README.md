# Get all the supported languages of [PrismJS](https://prismjs.com/)

This aims to get the latest supported languages of PrismJS by crawling its Github Repo and/or its test site.

@see https://github.com/PrismJS/prism/issues/178#issuecomment-27542669

## Install

1. Clone this repo
2. `composer install`
3. `php ./app/index.php --help` 

## Usage

You have 2 options, list the supported languages as `list` _(default)_ or `named` _(key value pair)_.

List: 

```php ./app/index.php list```

Named: 

```php ./app/index.php named```
 

## Example output

_as of 2019/04/27_

List

```
PrismJS Supported languages

abap
abnf
actionscript
ada
apacheconf
apl
applescript
arduino
arff
asciidoc
asm6502
aspnet
autohotkey
autoit
bash
basic
batch
bison
bnf
brainfuck
bro
c
cil
clike
clojure
cmake
coffeescript
core
cpp
crystal
csharp
csp
css-extras
css
d
dart
diff
django
docker
ebnf
eiffel
ejs
elixir
elm
erb
erlang
flow
fortran
fsharp
gcode
gedcom
gherkin
git
glsl
gml
go
graphql
groovy
haml
handlebars
haskell
haxe
hcl
hpkp
hsts
http
ichigojam
icon
inform7
ini
io
j
java
javadoc
javadoclike
javascript
javastacktrace
jolie
js-extras
jsdoc
json
json5
jsonp
jsx
julia
keyman
kotlin
latex
less
liquid
lisp
livescript
lolcode
lua
makefile
markdown
markup-templating
markup
matlab
mel
mizar
monkey
n1ql
n4js
nand2tetris-hdl
nasm
nginx
nim
nix
nsis
objectivec
ocaml
opencl
oz
parigp
parser
pascal
perl
php-extras
php
phpdoc
plsql
powershell
processing
prolog
properties
protobuf
pug
puppet
pure
python
q
qore
r
reason
regex
renpy
rest
rip
roboconf
ruby
rust
sas
sass
scala
scheme
scss
smalltalk
smarty
soy
sql
stylus
swift
t4-cs
t4-templating
t4-vb
tap
tcl
textile
toml
tsx
tt2
twig
typescript
vala
vbnet
velocity
verilog
vhdl
vim
visual-basic
wasm
wiki
xeora
xojo
xquery
yaml
```

Named

```
PrismJS Supported languages
Array
(
    [markup] => Markup
    [css] => CSS
    [clike] => C-like
    [javascript] => JavaScript
    [abap] => ABAP
    [abnf] => Augmented Backus–Naur form
    [actionscript] => ActionScript
    [ada] => Ada
    [apacheconf] => Apache Configuration
    [apl] => APL
    [applescript] => AppleScript
    [arduino] => Arduino
    [arff] => ARFF
    [asciidoc] => AsciiDoc
    [asm6502] => 6502 Assembly
    [aspnet] => ASP.NET (C#)
    [autohotkey] => AutoHotkey
    [autoit] => AutoIt
    [bash] => Bash
    [basic] => BASIC
    [batch] => Batch
    [bison] => Bison
    [bnf] => Backus–Naur form
    [brainfuck] => Brainfuck
    [bro] => Bro
    [c] => C
    [csharp] => C#
    [cpp] => C++
    [cil] => CIL
    [coffeescript] => CoffeeScript
    [cmake] => CMake
    [clojure] => Clojure
    [crystal] => Crystal
    [csp] => Content-Security-Policy
    [css-extras] => CSS Extras
    [d] => D
    [dart] => Dart
    [diff] => Diff
    [django] => Django/Jinja2
    [docker] => Docker
    [ebnf] => Extended Backus–Naur form
    [eiffel] => Eiffel
    [ejs] => EJS
    [elixir] => Elixir
    [elm] => Elm
    [erb] => ERB
    [erlang] => Erlang
    [fsharp] => F#
    [flow] => Flow
    [fortran] => Fortran
    [gcode] => G-code
    [gedcom] => GEDCOM
    [gherkin] => Gherkin
    [git] => Git
    [glsl] => GLSL
    [gml] => GameMaker Language
    [go] => Go
    [graphql] => GraphQL
    [groovy] => Groovy
    [haml] => Haml
    [handlebars] => Handlebars
    [haskell] => Haskell
    [haxe] => Haxe
    [hcl] => HCL
    [http] => HTTP
    [hpkp] => HTTP Public-Key-Pins
    [hsts] => HTTP Strict-Transport-Security
    [ichigojam] => IchigoJam
    [icon] => Icon
    [inform7] => Inform 7
    [ini] => Ini
    [io] => Io
    [j] => J
    [java] => Java
    [javadoc] => JavaDoc
    [javadoclike] => JavaDoc-like
    [javastacktrace] => Java stack trace
    [jolie] => Jolie
    [jsdoc] => JSDoc
    [js-extras] => JS Extras
    [json] => JSON
    [jsonp] => JSONP
    [json5] => JSON5
    [julia] => Julia
    [keyman] => Keyman
    [kotlin] => Kotlin
    [latex] => LaTeX
    [less] => Less
    [liquid] => Liquid
    [lisp] => Lisp
    [livescript] => LiveScript
    [lolcode] => LOLCODE
    [lua] => Lua
    [makefile] => Makefile
    [markdown] => Markdown
    [markup-templating] => Markup templating
    [matlab] => MATLAB
    [mel] => MEL
    [mizar] => Mizar
    [monkey] => Monkey
    [n1ql] => N1QL
    [n4js] => N4JS
    [nand2tetris-hdl] => Nand To Tetris HDL
    [nasm] => NASM
    [nginx] => nginx
    [nim] => Nim
    [nix] => Nix
    [nsis] => NSIS
    [objectivec] => Objective-C
    [ocaml] => OCaml
    [opencl] => OpenCL
    [oz] => Oz
    [parigp] => PARI/GP
    [parser] => Parser
    [pascal] => Pascal
    [perl] => Perl
    [php] => PHP
    [phpdoc] => PHPDoc
    [php-extras] => PHP Extras
    [plsql] => PL/SQL
    [powershell] => PowerShell
    [processing] => Processing
    [prolog] => Prolog
    [properties] => .properties
    [protobuf] => Protocol Buffers
    [pug] => Pug
    [puppet] => Puppet
    [pure] => Pure
    [python] => Python
    [q] => Q (kdb+ database)
    [qore] => Qore
    [r] => R
    [jsx] => React JSX
    [tsx] => React TSX
    [renpy] => Ren'py
    [reason] => Reason
    [regex] => Regex
    [rest] => reST (reStructuredText)
    [rip] => Rip
    [roboconf] => Roboconf
    [ruby] => Ruby
    [rust] => Rust
    [sas] => SAS
    [sass] => Sass (Sass)
    [scss] => Sass (Scss)
    [scala] => Scala
    [scheme] => Scheme
    [smalltalk] => Smalltalk
    [smarty] => Smarty
    [sql] => SQL
    [soy] => Soy (Closure Template)
    [stylus] => Stylus
    [swift] => Swift
    [tap] => TAP
    [tcl] => Tcl
    [textile] => Textile
    [toml] => TOML
    [tt2] => Template Toolkit 2
    [twig] => Twig
    [typescript] => TypeScript
    [t4-cs] => T4 Text Templates (C#)
    [t4-vb] => T4 Text Templates (VB)
    [t4-templating] => T4 templating
    [vala] => Vala
    [vbnet] => VB.Net
    [velocity] => Velocity
    [verilog] => Verilog
    [vhdl] => VHDL
    [vim] => vim
    [visual-basic] => Visual Basic
    [wasm] => WebAssembly
    [wiki] => Wiki markup
    [xeora] => Xeora
    [xojo] => Xojo (REALbasic)
    [xquery] => XQuery
    [yaml] => YAML
)
```

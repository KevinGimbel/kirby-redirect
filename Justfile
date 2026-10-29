#!/usr/bin/env just --justfile

dev:
    nix develop

toc:
    mktoc

prek:
    prek run --all-files

validate:
    #!/usr/bin/env bash
    PHP_FILES=$(find . -type f -name "*.php" | xargs)
    echo "[php 8.5] Checking for syntax errors"
    nix run nixpkgs#php85 -- --syntax-check $PHP_FILES

    echo "[php 8.4] Checking for syntax errors"
    nix run nixpkgs#php84 -- --syntax-check $PHP_FILES

    echo "[php 8.3] Checking for syntax errors"
    nix run nixpkgs#php83 -- --syntax-check $PHP_FILES

<div align="center">

# Website Archive

A collection of projects from early in my web developer career.

[![Build Status](https://github.com/Justintime50/website-archive/workflows/build/badge.svg)](https://github.com/Justintime50/website-archive/actions)

<img src="assets/showcase.png" alt="Showcase">

</div>

This is a monolithic repo of website projects from early in my software engineering career. As such, many are dated and are not indicative of my current skill as a web developer.

All of the source code included here are from projects that are no longer active and is provided for educational purposes only. The associated assets remain under the ownership of the original companies.

## Usage

```bash
# Deploy the site locally
docker-compose up -d

# Deploy the site in production
docker-compose -f docker-compose.yml -f docker-compose-prod.yml up -d
```

Visit at [website-archive.localhost](website-archive.localhost) locally or [website-archive.justinpaulhammond.com](https://website-archive.justinpaulhammond.com) in production.

## Development

```bash
# Lint CSS
npm run lint-css

# Lint HTML
npm run lint-html
```

## License & Contributions

I will not be accepting pull requests to this repo, it's provided "as-is". There is no license associated with this work, it is provided strictly for educational purposes and may not be redistributed as all work here is protected by Copyright Law.

Copyright 2021 Justin Hammond

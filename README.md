<p align="center">
  <a href="https://hemascorecard.com">
    <img src="./includes/images/hema_scorecard_logo_white_rgb_300px.png" alt="HEMA Scorecard Logo" width="300"/>
  </a>
</p>

# HEMA Scorecard

Software to run and manage tournaments.

- Developed by [Sean Franklin](https://github.com/SeanFranklin)
- A [SwordSTEM](https://swordstem.com) project
- Supported by the [HEMA Alliance](https://hemaalliance.org)

## Software Stack
- PHP 8.4.5
- MySQL 8.0.36

## Running in Docker
Ensure you have [Docker](https://docs.docker.com/get-started/get-docker/) installed.

From there you will want to set up your environment variables. A template file is provided in the root directory as `.env.template`.  Simply copy this file to `.env` and make any changes as needed.

After that simply issue `docker compose up` in the source root directory. The application will be avaliable on http://localhost:8000.

The PHP docker image contains xdebug, and the project contains sample VS Code config which allows user to debug application via "Listen for XDebug" command.

## Data persistence
Data is persisted in `data` folder.  If you want to delete the database and start fresh, you can do so by simply bringing the containers down and then deleting the `data` folder.  Once you restart the containers, the database will be re-initialized with the sample data provided in the `includes` folder.

## Troubleshooting
If there is a need to get inside running container simply issue 

```bash
$ docker compose exec db /bin/bash
``` 

to get into MySQL container, and 

```bash
$ docker compose exec web /bin/bash
```


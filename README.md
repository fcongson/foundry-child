# foundry-child

A child theme for the Wordpress Foundry Theme

## Run

```
docker-compose up
```
Open http://localhost:8000 in a web browser

## Shutdown

```
docker-compose down
```
This removes the containers and default network, but preserves your WordPress database

## Cleanup

```
docker-compose down --volumes
```
This removes the containers, default network, and the WordPress database

## Notes

Updating `foundry-child/style.css` may need the web browser to "Empty Cache and Hard Reload"

## Reference

Foundry Theme - https://www.tommusrhodus.com/portfolio/foundry-wordpress-theme/

Quickstart Compose and Wordpress - https://docs.docker.com/compose/wordpress/

How To Create And Customize A WordPress Child Theme - https://www.smashingmagazine.com/2016/01/create-customize-wordpress-child-theme/

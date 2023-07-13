# Webui For BFM
its a clone from [tamaarin](https://github.com/taamarin/ui4cfm) but for CFM (does't exists anymore)
### BE CAREFULL
if you want use this module. please use [magisk](https://github.com/topjohnwu/Magisk/releases) v23.0+.  **The device must be ROOTED**
## How to Use
- install [termux](https://f-droid.org/en/packages/com.termux/)
- open termux, type `apt update && apt upgrade`
- install php in termux `apt install php`
- install module in [here](https://github.com/ItzKazuki/webui4bfm/releases)
- install module on magisk
- open 127.0.0.1:9999 
- your webui is ready!

## Command
for start webui you can use:
```bash
/data/adb/webui/scripts/webui.service -s
```
for start webui with custom port you can use:
```bash
/data/adb/webui/scripts/webui.service -s 8080
```
for stop webui you can use:
```bash
/data/adb/webui/scripts/webui.service -k
```

## External package
- [Tiny File Manager](https://tinyfilemanager.github.io/)
- [eZ Server Monitor](https://www.ezservermonitor.com/)
- [Librespeed](https://librespeed.org/)
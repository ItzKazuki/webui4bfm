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

**IMPORTANT!**
tolong update config.php di /data/adb/webui/dashboard/config.php untuk port clash nya.
jika ingin menggunakan custom local dns gunakan

```bash
mount -o rw,remount /system/etc/hosts
```
lalu edit file tsb dengan syntaks:
ip local-dns contoh:
```bash
127.0.0.1 kazuki.wifi
192.168.0.1 kazuki.wifi
```

jika di koneksi wifi/hostpot penting untuk mengetahui ip local dari prangkat tsb. dan replace ke ip seperti di atas.

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

## Next Update
- use apache for magisk (ga ada anjay, ntr w coba buat)

## External package
- [Tiny File Manager](https://tinyfilemanager.github.io/)
- [eZ Server Monitor](https://www.ezservermonitor.com/)
- [Librespeed](https://librespeed.org/)
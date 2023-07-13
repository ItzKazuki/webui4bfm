webui_data_dir="/data/adb/webui"

rm_data() {
    rm -rf ${webui_data_dir}
    rm -rf /data/adb/webui/webui_service.sh
}

rm_data
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StarLive.DAL.Common
{
    public class Logger
    {
        public static void Log(string logName, string className, string functionName, string msg)
        {
            if (!Directory.Exists(Path.Combine(AppDomain.CurrentDomain.BaseDirectory + "/Logger")))
            {
                Directory.CreateDirectory(Path.Combine(AppDomain.CurrentDomain.BaseDirectory + "/Logger"));
            }
            string path = Path.Combine(AppDomain.CurrentDomain.BaseDirectory + "/Logger", logName + "_" + DateTime.Now.ToString("yyyyMMdd") + ".txt");
            if (!File.Exists(path))
            {
                // FileStream fs1 = new FileStream(path, FileMode.OpenOrCreate, FileAccess.Write);
                using (StreamWriter sw = File.CreateText(path))
                {
                    sw.WriteLine("Class Name :" + className);
                    sw.WriteLine("Function Name : " + functionName);
                    sw.WriteLine("Error Msg : " + msg);
                    sw.WriteLine("DateTime : " + DateTime.Now);
                    sw.WriteLine("-----------------------------------------------------------------------------------------------------------------");
                    sw.WriteLine("-----------------------------------------------------------------------------------------------------------------" + Environment.NewLine);
                    sw.Close();
                    sw.Dispose();
                    GC.Collect();
                }
            }
            else
            {
                using (StreamWriter sw = File.AppendText(path))
                {
                    sw.WriteLine("Class Name :" + className);
                    sw.WriteLine("Function Name : " + functionName);
                    sw.WriteLine("Error Msg : " + msg);
                    sw.WriteLine("DateTime : " + DateTime.Now);
                    sw.WriteLine("-----------------------------------------------------------------------------------------------------------------");
                    sw.WriteLine("-----------------------------------------------------------------------------------------------------------------" + Environment.NewLine);
                    sw.Close();
                    sw.Dispose();
                    GC.Collect();
                }
            }
            path = null;

        }
    }
}

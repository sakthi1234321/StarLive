using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Net.Mail;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;

namespace StarLive.DAL.Common
{
    public class Email
    {
        public static bool SendEmail(string Email, string Subject, string Body)
        {
            try
            {
                string SMTPHost = "smtp.gmail.com";
                string SMTPPort = ConfigurationManager.AppSettings["SMTPPort"];
                string smtpUserName = ConfigurationManager.AppSettings["SMTPUserName"];
                string smtpPassword = ConfigurationManager.AppSettings["SMTPPassword"];
                MailMessage Msg = new MailMessage();
                Msg.From = new MailAddress(smtpUserName);
                Msg.To.Add(Email);
                Msg.Body = Body;
                Msg.IsBodyHtml = true;
                // your remote SMTP server IP.
                SmtpClient smtp = new SmtpClient();
                Msg.Subject = Subject;
                smtp.Host = SMTPHost;
                smtp.Port = Convert.ToInt32(SMTPPort);
                smtp.Credentials = new System.Net.NetworkCredential(smtpUserName, smtpPassword);
                smtp.EnableSsl = true;
                smtp.Send(Msg);
                return true;
            }
            catch (Exception ex)
            {
                return false;
            }


        }
           }
}
